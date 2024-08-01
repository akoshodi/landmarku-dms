<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Institution;

use DB;

class AutocompleteController extends Controller
{
    function index()
    {
        return view('staff.search');
    }

    function autocomplete(Request $request)
    {
        $data = Institution::select('id', 'name')

            ->where("name","LIKE","%{$request->input('query')}%")

            ->get();

        return response()->json($data);
    }
}
