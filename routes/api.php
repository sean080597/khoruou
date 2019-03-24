<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/TimKiemRuou', 'RuouController@TimKiemRuou');
Route::apiResources(['ruou'=>'RuouController']);

Route::get('/SPTheoLoai/{MaLoai}', 'PhanLoaiController@SPTheoLoai');
Route::apiResources(['phanloai'=>'PhanLoaiController']);

Route::get('/SPTheoNCC/{MaNCC}', 'Nhacungcap_Controller@SPTheoNCC');
Route::apiResources(['nhacungcap'=>'Nhacungcap_Controller']);

Route::get('/SPTheoNSX/{MaNSX}', 'Nhasanxuat_Controller@SPTheoNSX');
Route::apiResources(['nhasanxuat'=>'Nhasanxuat_Controller']);

Route::apiResources(['hoadon'=>'HoaDonController']);

Route::apiResources(['user'=>'UserController']);

Route::apiResources(['QLRuou'=>'QLRuou_Controller']);

Route::get('/thongke_laynam', 'ThongKeController@layNam');
Route::get('/thongke_laytheonam', 'ThongKeController@layThongKeTheoNam');
Route::apiResources(['ThongKe'=>'ThongKeController']);
