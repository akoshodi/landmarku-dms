<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\User;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('documents')
            ->leftJoin('users', 'documents.user_id', '=', 'users.id')
            ->leftJoin('document_type', 'documents.document_type_id', '=', 'document_type.id')
            ->select('users.last_name', 'users.first_name', 'users.entry_year', 'users.avatar', 'users.id', 'document_type.name', 'documents.created_at', 'documents.id as document_id', 'documents.session', 'documents.semester', 'documents.uuid', 'documents.verified', 'documents.name as docname')
            ->orderBy('documents.created_at', 'desc')
//            ->get();
            ->paginate(10);


        $uploads = DB::table('documents')
            ->selectRaw('count(*) as total')
            ->first();
        $uploads_today = DB::table('documents')
            ->selectRaw('count(*) as total')
//            ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->where('created_at', '>=', Carbon::today())
//            Carbon::today())->get()
            ->first();
        $students = DB::table('users')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when status_id = 32 or status_id = 90 then 'active' end) as active")
            ->selectRaw("count(case when status_id NOT IN (32,90) then 'not active' end) as in_active")
            ->first();

        return view('backend.admin.dashboard', compact('uploads', 'users', 'uploads_today', 'students'));
    }

}
