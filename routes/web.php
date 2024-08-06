<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PrintoutController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/blank', function () {
    return view('pages.blank');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/{page}', function ($page) {
//     return view("pages.{$page}");
// })->where('page', '.*');
//
//Route::get('/base/{page}', function ($page) {
//    return view("pages.base.{$page}");
//})->where('page', '.*');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dash', function () { return view('index'); })->name('dash');

    //
    Route::get('/', function () { return view('backend.index'); });
    Route::resource('documents', DocumentController::class, [
        'names' => [
            'destroy' => 'documents.del',
        ]
    ]);
    Route::get('documents/{uuid}',  [DocumentController::class, 'download'])->name('document');
    Route::resource('/printouts', PrintoutController::class, [
        'names' => [
            'destroy' => 'printout.del',
        ]
    ]);

    Route::get('pdf', function () {
        $documents = DB::table('document_type')
            ->leftJoin('documents', 'document_type.id', '=', 'documents.document_type_id')
            ->select('document_type.name', 'document_type.id as docid', 'documents.created_at', 'documents.id', 'documents.session', 'documents.semester', 'documents.uuid')
            ->where('documents.user_id', Auth::user()->id)
            ->get();
        $users = DB::table('users')
            ->leftJoin('programmes', 'users.PROGRAMME', '=', 'programmes.ID')
            ->select('users.last_name', 'users.first_name', 'programmes.NAME as programme', 'users.REGNO')
            ->where('users.id', Auth::user()->id)
            ->get();
        $pdf = PDF::loadView('backend.document.report3', compact('documents', 'users'));
        return $pdf->download('uploads.pdf');
    })->name('download');


});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['role:Administrator|Superadmin', 'auth']
], function () {
    Route::resource('manage', UserController::class);
//    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

});

require __DIR__.'/auth.php';
