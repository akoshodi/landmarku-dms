<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Jobs\UploadDocumentToS3;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = DB::table('document_type')
            ->leftJoin('documents', 'document_type.id', '=', 'documents.document_type_id')
            ->select('document_type.name', 'documents.created_at', 'documents.id', 'documents.session', 'documents.semester', 'documents.uuid')
            ->where('documents.user_id', Auth::user()->id)
            ->get();

        $items = DB::table('document_type')
            ->whereNotIn('document_type.id', function ($query) {
                $query->select('document_type_id')
                    ->from('documents')
                    ->where('user_id', Auth::user()->id);
            })
            ->whereNotIn('document_type.id', [9,10,12])
            ->select('document_type.name', 'document_type.id')
            ->get();

        return view('backend.document.upload', compact('documents', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.document.printouts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->document == 6){
            $request->validate([
                'document' => 'required',
                'uploaded_file' => 'required|mimes:jpg,jpeg|max:256'
            ]);
            $file = $request->file('uploaded_file');
            $shortname = DocumentType::where('id',$request->document)->value('shortname');
            $fileName = Auth::user()->REGNO . '_' . $shortname . '_' . uniqid('', true) . '.' . $file->getClientOriginalExtension();

            $request->file('uploaded_file')->storeAs(
                "uploads/passport", $fileName, 'public'
            );
            $data['file_path'] = 'uploads/passport';
        } else {
            $request->validate([
                'document' => 'required',
                'uploaded_file' => 'required|mimes:pdf|max:512'
            ]);
            $file = $request->file('uploaded_file');
            $shortname = DocumentType::where('id', $request->document)->value('shortname');
            $fileName = Auth::user()->REGNO . '_' . $shortname . '_' . uniqid('', true) . '.' . $file->getClientOriginalExtension();

            $path = $request->file('uploaded_file')->storeAs(
                "uploads", $fileName, 'public'
            );
            $data['file_path'] = 'uploads/';
        }

        $data['name'] = $fileName;
        $data['uuid'] = (string) Str::uuid();
        $data['user_id'] = Auth::user()->id;
        $data['document_type_id'] = $request->document;
        $data['status'] = 1;
        $document = Document::create($data);

        if ($document){
            toastr()->success('Document uploaded successfully');
        }

        // Dispatch job to upload the document to S3
        UploadDocumentToS3::dispatch($document);

        return redirect()->route('documents.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($uuid)
    {
        $doc = Document::where('uuid', $uuid)->firstOrFail();

            $file = Storage::url( $doc->file_path . '/' . $doc->name);
        return response()->file(public_path(). $file);

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
            toastr()->error('Document does not exist');
        }

        return back();
    }

    public function dropDownShow(Request $request)

    {
        $items = DocumentType::pluck('name', 'id');
        $selectedID = 2;

        return view('backend.document.upload', compact('selectedID', 'items'));
    }

}
