<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\DonhangController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\ChitietdonhangController;
use App\Http\Controllers\TrangchuController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|	
*/
//trang chu


	Route::get('/',[TrangchuController::class,'getDanhsach']);
	Route::get('list-chitiet/{id}',[TrangchuController::class,'getchitiet']);
	Route::get('list-danhmuc/{id}',[TrangchuController::class,'getchitietdm']);
	Route::get('list-danhmuc/{id}',[TrangchuController::class,'getchitietdm']);
	Route::get('seach',[TrangchuController::class,'getseach']);
	Route::get('add-cart/{id}',[TrangchuController::class,'addcart']);
	Route::get('showcart',[TrangchuController::class,'showcart']);


	
	




// admin
Route::group(['prefix'=>'admin'],function(){

	Route::get('danhmuc',[DanhmucController::class,'getDanhsach']);
//danh muc
	Route::get('add-danhmuc',[DanhmucController::class,'getThem']);
	Route::post('add-danhmuc',[DanhmucController::class,'postThem']);

	Route::get('edit-danhmuc/{id}',[DanhmucController::class,'getSua']);
	Route::post('edit-danhmuc/{id}',[DanhmucController::class,'postSua']);

	Route::get('xoa-danhmuc/{id}',[DanhmucController::class,'getXoa']);


		// $sanpham->Ten_hang_hoa=$request->Ten_hang_hoa;
		// $sanpham->ma_code=$request->ma_code;
		// $sanpham->gia=$request->gia;
		// $sanpham->so_luong_hang=$request->so_luong_hang;
		// $sanpham->hinh=$request->hinh;
		// $sanpham->id_loai=$request->loaihang;
//San pham

	Route::get('sanpham',[SanphamController::class,'getDanhsach']);
	Route::get('add-sanpham',[SanphamController::class,'getThem']);
	Route::post('add-sanpham',[SanphamController::class,'postThem']);
	Route::get('edit-sanpham/{id}',[SanphamController::class,'getSua']);
	Route::post('edit-sanpham/{id}',[SanphamController::class,'postSua']);



	Route::get('xoa-sanpham/{id}',[SanphamController::class,'getXoa']);

// don hang 
	Route::get('donhang',[DonhangController::class,'getDanhsach']);

	Route::get('chitiet-donhang/{id}',[DonhangController::class,'getDonhang']);

	Route::post('chitiet-donhang/{id}',[DonhangController::class,'postDonhang']);

	// Route::get('chitiet-donhang/{id}',[DonhangController::class,'getDanhsach1']);

// tin tuc
	Route::get('tintuc',[TintucController::class,'getDanhsach']);
//them
	Route::get('add-tintuc',[TintucController::class,'getThem']);
	Route::post('add-tintuc',[TintucController::class,'postThem']);
//sưa
	Route::get('edit-tintuc/{id}',[TintucController::class,'getSua']);
	Route::post('edit-tintuc/{id}',[TintucController::class,'postSua']);
//xoa
	Route::get('xoa-tintuc/{id}',[TintucController::class,'getXoa']);





});







// DEMO
Route::get('chao',[MyController::class,'Xinchao']);

Route::get('uploadanh', function () {
	return view('upfile-anh');
});

Route::post('fileanh1',[MyController::class,'ab123'])->name('anh');

Route::get('Time/{t}',[MyController::class,'Time']);
View::share('Khoahoc','LAMDEPTRAI');
// là như nào tôi chưa hiểu
// à hiểu vấn đề rồi,ông chưa thêm cái filed để laravel nó xác thực request, mục đích là bảo mật
// là như nào hả ông them mỗi @csrf là đc hả ông ừ ông,




