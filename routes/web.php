<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\PhongbanController;
use App\Http\Controllers\HopdongController;
use App\Http\Controllers\BaohiemController;
use App\Http\Controllers\ChucvuController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\AdminController;
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
//Danh mục Nhân Viên
Route::group(['middleware'=>'auth'],function()
{
  Route::get('/nhanvien',[NhanvienController::class,'nhanvien'])
  ->name('nhanvien');

});

 Route::get('/count',[NhanvienController::class,'count'])
 ->name('count');
 Route::get('/thongkenhanvien',[NhanvienController::class,'thongke_nhanvien'])
 ->name('thongke_nhanvien');
  Route::get('/themnhanvien',[NhanvienController::class,'them_nv'])
 ->name('them_nv');
 Route::post('/luunhanvien',[NhanvienController::class,'luu_nv'])
 ->name('luu_nv');
 Route::get('/suanhanvien/{id}',[NhanvienController::class,'sua_nv'])
 ->name('sua_nv');
 Route::post('/capnhatnhanvien/{id}',[NhanvienController::class,'capnhat_nv'])
 ->name('capnhat_nv');
 Route::get('/xoanhanvien/{id}',[NhanvienController::class,'xoa_nv'])
 ->name('xoa_nv');



 //Danh mục Phòng Ban

 Route::get('/phongban',[PhongbanController::class,'phongban'])
 ->name('phongban');
  Route::get('/themphongban',[PhongbanController::class,'them_pb'])
 ->name('them_pb');
 Route::post('/luuphongban',[PhongbanController::class,'luu_pb'])
 ->name('luu_pb');
 Route::get('/suaphongban/{id}',[PhongbanController::class,'sua_pb'])
 ->name('sua_pb');
 Route::post('/capnhatphongban/{id}',[PhongbanController::class,'capnhat_pb'])
 ->name('capnhat_pb');
 Route::get('/xoaphongban/{id}',[PhongbanController::class,'xoa_pb'])
 ->name('xoa_pb');


//Danh mục Chức Vụ

 Route::get('chucvu',[ChucvuController::class,'chucvu'])
->name('chucvu');
Route::get('/themchucvu',[ChucvuController::class,'them_cv'])
->name('them_cv');
Route::post('/luuchucvu',[ChucvuController::class,'luu_cv'])
->name('luu_cv');
Route::get('/suachucvu/{id}',[ChucvuController::class,'sua_cv'])
->name('sua_cv');
Route::post('/capnhatchucvu/{id}',[ChucvuController::class,'capnhat_cv'])
->name('capnhat_cv');
Route::get('/xoachucvu/{id}',[ChucvuController::class,'xoa_cv'])
->name('xoa_cv');
 
 //Danh mục Hợp đồng

 Route::get('/hopdong',[HopdongController::class,'hopdong'])
 ->name('hopdong');
  Route::get('/themhopdong',[HopdongController::class,'them_hd'])
 ->name('them_hd');
 Route::post('/luuhopdong',[HopdongController::class,'luu_hd'])
 ->name('luu_hd');
 Route::get('/suahopdong/{id}',[HopdongController::class,'sua_hd'])
 ->name('sua_hd');
 Route::post('/capnhathopdong/{id}',[HopdongController::class,'capnhat_hd'])
 ->name('capnhat_hd');
 Route::get('/xoahopdong/{id}',[HopdongController::class,'xoa_hd'])
 ->name('xoa_hd');


  //Danh mục Bảo Hiểm

  Route::get('baohiem',[BaohiemController::class,'baohiem'])
  ->name('baohiem');
   Route::get('/thembaohiem',[BaohiemController::class,'them_bhxh'])
  ->name('them_bhxh');
  Route::post('/luubaohiem',[BaohiemController::class,'luu_bhxh'])
  ->name('luu_bhxh');
  Route::get('/suabaohiem/{id}',[BaohiemController::class,'sua_bhxh'])
  ->name('sua_bhxh');
  Route::post('/capnhatbaohiem/{id}',[BaohiemController::class,'capnhat_bhxh'])
  ->name('capnhat_bhxh');
  Route::get('/xoa/{id}',[BaohiemController::class,'xoa_bhxh'])
  ->name('xoa_bhxh');


    //Danh mục Chức Vụ

    Route::get('baohiem',[BaohiemController::class,'baohiem'])
    ->name('baohiem');
     Route::get('/thembaohiem',[BaohiemController::class,'them_bhxh'])
    ->name('them_bhxh');
    Route::post('/luubaohiem',[BaohiemController::class,'luu_bhxh'])
    ->name('luu_bhxh');
    Route::get('/suabaohiem/{id}',[BaohiemController::class,'sua_bhxh'])
    ->name('sua_bhxh');
    Route::post('/capnhatbaohiem/{id}',[BaohiemController::class,'capnhat_bhxh'])
    ->name('capnhat_bhxh');
    Route::get('/xoa/{id}',[BaohiemController::class,'xoa_bhxh'])
    ->name('xoa_bhxh');
    

    // //Api controller
    // Route::group(['prefix'=>'api',],function()
    // {
    //      Route::get('nhanvien_api',[ApiController::class,'nhanvien_api'])
    // ->name('nhanvien_api');
    // });


    //Import_Excel
    Route::get('getform', [ExcelController::class,'getform'])
    ->name('getform');  
    Route::post('import', [ExcelController::class,'import'])
    ->name('import');  

    //Đăng nhập
    Route::get('/',[AdminController::class,'dangnhap'])
    ->name('dangnhap');
    Route::get('dangky',[AdminController::class,'dangky'])
    ->name('dangky');
    Route::get('thoat',[AdminController::class,'thoat'])
    ->name('thoat');
    Route::post('xulydangnhap',[AdminController::class,'xulydangnhap'])
    ->name('xulydangnhap');
 
 


