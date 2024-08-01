<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PrintoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = DB::table('document_type')
            ->LeftJoin('documents', 'document_type.id', '=', 'documents.document_type_id')
            ->select('document_type.name', 'documents.created_at', 'documents.id', 'documents.session', 'documents.semester', 'documents.uuid')
            ->whereIn('document_type.id', [9,10,12] )
            ->where('documents.user_id', Auth::user()->id)
            ->get();

        $session = DB::table('academic_session')
            ->select('academic_session.description', 'academic_session.shortcode')
            ->where('academic_session.shortcode', '>=', Auth::user()->ENTRY_YEAR)
            ->orderBy('academic_session.shortcode')
            ->limit(10)
            ->get();

        $items = DB::table('document_type')
            ->whereIn('document_type.id', [9,10,12] )

            ->select('document_type.name', 'document_type.id')
            ->get();

        return view('backend.document.printouts', compact('documents', 'items', 'session'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'document' => 'required',
            'semester' => 'required',
            'acadsession' => 'required',
            'uploaded_file' => 'required|mimes:pdf|max:2048'

        ]);

        $file = $request->file('uploaded_file');
        $shortname = DocumentType::where('id',$request->document)->value('shortname');
        $fileName = Auth::user()->REGNO . '_' . $shortname . '_' . uniqid('', true) . '.' . $file->getClientOriginalExtension();

        $request->file('uploaded_file')->storeAs(
            "uploads", $fileName, 'public'
        );

        $attributes['document'] = $fileName;
        $data['name'] = $fileName;
        $data['uuid'] = (string) Str::uuid();
        $data['user_id'] = Auth::user()->id;
        $data['file_path'] = 'uploads';
        $data['document_type_id'] = $request->document;
        $data['semester'] = $request->semester;
        $data['session'] = $request->acadsession;
        $data['status'] = 1;
        $saveDocument = Document::create($data);

        if ($saveDocument){
            toastr()->success('Document uploaded successfully');
        }

        return redirect('/documents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doc = Document::find($id);
        try {

            $delf = Storage::disk('public')->delete("{$doc->file_path}/{$doc->name}");

        } catch (Throwable $e) {

            report($e);

            return false;
        }

        if ($delf){
            $doc->delete();
            toastr()->success('Document deleted successfully');
        } else {
            toastr()->error('Document failed to delete');
        }

        return redirect('/documents');
    }
}
