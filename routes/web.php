<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\backendcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\MustAdmin;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/layout', function () {
    return view('layout');
}
);
Route::get('/home', function () {
    return view('home');
}
);

Route::get('/keanggotaan', function () {
    return view('keanggotaan');
}
);

Route::get('/user/view-form', function () {
    return view('user/view-form');
}
);


// Bagian dimana hanya untuk front end
route::get('/',[frontendcontroller::class, 'index']);
route::get('/contact',[frontendcontroller::class, 'contact']);
route::get('/about',[frontendcontroller::class, 'about']);
route::get('/news',[backendcontroller::class, 'view_berita_front']);
route::get('/gallery_foto',[backendcontroller::class, 'view_gallery_front']);
route::get('/gallery_video',[backendcontroller::class, 'view_gallery_video_front']);


//Bagian dimana untuk login stuff
route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
route::post('/login', [AuthController::class, 'authenticating']);
route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

//Bagian dimana untuk multi user login
//route::group(['middleware' => ['auth','CekLevel:admin']])

//bagian dimana untuk crud user
route::get('user/view',[backendcontroller::class, 'view_user']);
route::post('/user/view',[backendcontroller::class, 'store_user']);
route::get('/user/view-form',[backendcontroller::class, 'create_user']);//->middleware('auth','must-admin');
route::delete('/user-delete/{id}',[backendcontroller::class, 'delete_user']);
route::get('/user-edit/{id}',[backendcontroller::class, 'edit_user']);
route::put('/user-update/{id}',[backendcontroller::class, 'update_user']);

//bagian dimana untuk crud berita
route::get('berita/view-berita',[backendcontroller::class, 'view_berita']);
route::post('/berita/view-berita',[backendcontroller::class, 'store_berita']);
route::get('/berita/berita-form',[backendcontroller::class, 'create_berita']);//->middleware('auth','must-admin');
route::delete('/berita-delete/{id}',[backendcontroller::class, 'delete_berita']);
route::get('/berita-edit/{id}',[backendcontroller::class, 'edit_berita']);
route::put('/berita-update/{id}',[backendcontroller::class, 'update_berita']);

//bagian dimana untuk crud gallery
route::get('gallery/view-gallery',[backendcontroller::class, 'view_gallery']);
route::post('/gallery/view-gallery',[backendcontroller::class, 'store_gallery']);
route::get('/gallery/gallery-form',[backendcontroller::class, 'create_gallery']);//->middleware('auth','must-admin');
route::delete('/gallery-delete/{id}',[backendcontroller::class, 'delete_gallery']);
route::get('/gallery-edit/{id}',[backendcontroller::class, 'edit_gallery']);
route::put('/gallery-update/{id}',[backendcontroller::class, 'update_gallery']);

//bagian dimana untuk crud keahlian
route::get('keahlian/view-keahlian',[backendcontroller::class, 'view_keahlian']);
route::post('/keahlian/view-keahlian',[backendcontroller::class, 'store_keahlian']);
route::get('/keahlian/keahlian-form',[backendcontroller::class, 'create_keahlian']);//->middleware('auth','must-admin');
route::delete('/keahlian-delete/{id}',[backendcontroller::class, 'delete_keahlian']);
route::get('/keahlian-edit/{id}',[backendcontroller::class, 'edit_keahlian']);
route::put('/keahlian-update/{id}',[backendcontroller::class, 'update_keahlian']);

//bagian dimana untuk crud keahlian
route::get('kota/view-kota',[backendcontroller::class, 'view_kota']);
route::post('/kota/view-kota',[backendcontroller::class, 'store_kota']);
route::get('/kota/kota-form',[backendcontroller::class, 'create_kota']);//->middleware('auth','must-admin');
route::delete('/kota-delete/{id}',[backendcontroller::class, 'delete_kota']);
route::get('/kota-edit/{id}',[backendcontroller::class, 'edit_kota']);
route::put('/kota-update/{id}',[backendcontroller::class, 'update_kota']);

//bagian dimana untuk crud pengalaman
route::get('pengalaman/view-pengalaman',[backendcontroller::class, 'view_pengalaman']);
route::post('/pengalaman/view-pengalaman',[backendcontroller::class, 'store_pengalaman']);
route::get('/pengalaman/pengalaman-form',[backendcontroller::class, 'create_pengalaman']);//->middleware('auth','must-admin');
route::delete('/pengalaman-delete/{id}',[backendcontroller::class, 'delete_pengalaman']);
route::get('/pengalaman-edit/{id}',[backendcontroller::class, 'edit_pengalaman']);
route::put('/pengalaman-update/{id}',[backendcontroller::class, 'update_pengalaman']);

//bagian dimana untuk crud alumni
route::get('alumni/view-alumni',[backendcontroller::class, 'view_alumni']);
route::post('/alumni/view-alumni',[backendcontroller::class, 'store_alumni']);
route::get('/alumni/alumni-form',[backendcontroller::class, 'create_alumni']);//->middleware('auth','must-admin');
route::delete('/alumni-delete/{id}',[backendcontroller::class, 'delete_alumni']);
route::get('/alumni-edit/{id}',[backendcontroller::class, 'edit_alumni']);
route::put('/alumni-update/{id}',[backendcontroller::class, 'update_alumni']);

//bagian dimana untuk contact us
route::get('/contact_us/view-contact',[backendcontroller::class, 'view_contact']);
route::post('/contact',[backendcontroller::class, 'store_contact']);
route::delete('/contact-delete/{id}',[backendcontroller::class, 'delete_contact']);