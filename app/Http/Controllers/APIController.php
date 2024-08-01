<?php

namespace App\Http\Controllers;

use App\Models\User;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class APIController extends Controller
{
    public function getRowDetailsData()
    {
        $users = User::withLastLogin()
            ->select(['id', 'first_name', 'last_name', 'email', 'created_at', 'updated_at']);

        return Datatables::of($users)->make(true);
    }

    public function getMasterDetailsData()
    {
        $users = User::select();

        return Datatables::of($users)
            ->addColumn('details_url', function($user) {
                return route('api.master_single_details', $user->id);
            })->make(true);
    }

    public function getAllUsersData()
    {
        $users = User::select(['id', 'first_name', 'last_name', 'created_at', 'REGNO', 'status_id'])
//            ->withLastLoginDate()
            ->with('status')
            ->withCount('documents')
            ->whereIn('status_id', [32, 33,34,36,59,60,63,70,88,90,93,99,104,112]);
//            ->where('id', 273558)->get();
//        dd($users); Auth::user()->hasRole(['Superadmin'])


        return Datatables::of($users)
//            ->addColumn('action', function ($user) {
//                return $user->id;
//            })
            ->addColumn('action', function ($user) {

                return '<a class="btn btn-primary btn-sm" href="/admin/manage/' . $user->id . '">
                            <i class="fas cil-search"></i>
                        </a>' . '  ' .
                        '<a class="btn btn-warning btn-sm" href="/impersonate/take/' . $user->id  . '" >
                               <i class="icon cil-user"></i>
                        </a>';
            })
            ->editColumn('id', '{{$id}}')

//            ->addColumn('lastlogin', function ($user) {
//                return $user->lastLogin ? Carbon::parse($user->lastLogin)->diffForHumans() : 'Never';
//                return empty($user->lastLogin) ? 'Never' : Carbon::parse($user->lastLogin->created_at)->diffForHumans();
//            })
            ->addColumn('status', function ($user) {
                return ucfirst($user->status->description);
            })
            ->addColumn('full_name', function ($user) {
                return $user->last_name . ' ' . $user->first_name;
            })
            ->setRowId('id')
            ->make(true);
    }

}
