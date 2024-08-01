<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Gender;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
//use App\Ldap\User as Ldapuser;
use LdapRecord\Models\OpenLDAP\User as Ldapuser;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.uploaders.manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gender = Gender::pluck('name', 'id');
        $selectedID = 1;

        return view('backend.uploaders.create', compact('selectedID', 'gender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        $documents = DB::table('document_type')
            ->LeftJoin('documents', 'document_type.id', '=', 'documents.document_type_id')
            ->select('document_type.name', 'documents.created_at', 'documents.id', 'documents.session', 'documents.semester', 'documents.uuid')
            ->where('documents.user_id', $id)
            ->get();

        return view('backend.uploaders.show', compact('users', 'documents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('backend.uploaders.edit', compact('user'));
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

    public function saveldapuser(Request $request)
    {
        try
        {
            $dn = 'cn=' . ucfirst($request->last_name) . ' ' . ucfirst($request->first_name) . ',' . 'dc=rlabs,dc=test';
            $user = (new Ldapuser)->setDn($dn)->inside('ou=Users,dc=rlabs,dc=test');
            $user->setConnection('default');
            $user->cn = ucfirst($request->last_name) . ' ' . ucfirst($request->first_name);
            $user->uid = $request->username;
            $user->givenname = ucfirst($request->first_name);
            $user->sn = ucfirst($request->last_name);
            $user->mail = strtolower($request->last_name . '.' . $request->first_name . '@lu.edu.ng');
            $user->gidNumber = 1011577;
            $user->homedirectory = '/home/nologin';
            $user->uidnumber = $request->phone;
//            $user->userpassword = Hash::make($request->password);
            $user->userpassword = "{SHA}" . base64_encode(pack("H*", sha1($request->password)));
            $user->setAttribute('objectclass', ['uidObject','top', 'posixAccount', 'person','organizationalPerson','inetOrgPerson']);
//dd($user);
            $user->save();
            return redirect()->route('card');
        } catch (LdapRecord\Models\ModelNotFoundException $e) {
        dd($e);
        }

    }
    public function prof(Request $request)
    {
        $user = User::findOrFail(64);
        $data = DB::table('users')
            ->leftJoin('gender', 'users.gender_id', '=', 'gender.id')
            ->leftJoin('titles', 'users.title_id', '=', 'titles.id')
            ->leftJoin('positions', 'users.position_id', '=', 'positions.id')
            ->leftJoin('departments', 'users.department_id', '=', 'departments.id')
            ->leftJoin('job_titles', 'users.job_title_id', '=', 'job_titles.id')
            ->leftJoin('marital_status', 'users.marital_status_id', '=', 'marital_status.id')
            ->leftJoin('employment_status', 'users.employment_status_id', '=', 'employment_status.id')
            ->leftJoin('employment_type', 'users.employment_type_id', '=', 'employment_type.id')
            ->where('users.id', '=', 64)
            ->select('users.last_name', 'users.first_name', 'users.other_name', 'users.staffno',
                'users.username', 'users.email', 'users.phone', 'departments.dept_name as department',
                'job_titles.job_title_name as job_title', 'positions.position_name as position', 'avatar', 'gender.gender_name as gender',
                'marital_status.name as marital_status', 'employment_status.empl_status_name as employment_status',
                'employment_type.name as employment_type', 'hire_date', 'exit_date', 'exit_date', 'users.is_active', 'bank',
                'account_number','dob', 'titles.prefix as title', )
            ->get();
//
        $edu = User::find(64)->education()->with('institutions')
            ->get()->pluck('institution_name');

            ddd($edu);

//        dd($edu);
        return view('backend.uploaders.form', compact('data','edu'));

    }
}
