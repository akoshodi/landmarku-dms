<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.records.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required',
            'uploaded_file' => 'required|mimes:pdf|max:512'
        ]);
        $file = $request->file('uploaded_file');
        $shortname = DocumentType::where('id',$request->document)->value('shortname');
        $fileName = Auth::user()->REGNO . '_' . $shortname . '_' . uniqid('', true) . '.' . $file->getClientOriginalExtension();

        $request->file('uploaded_file')->storeAs(
            "uploads", $fileName, 'public'
        );
        $data['file_path'] = 'uploads';

        $data['name'] = $fileName;
        $data['uuid'] = (string) Str::uuid();
        $data['user_id'] = Auth::user()->id;
        $data['document_type_id'] = $request->document;
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
        //
    }
}
