<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruou;
use DB;

class QLRuou_Controller extends Controller
{
    public function index()
    {
        return DB::table('ruou')->select('ruou.*','nhasanxuat.TenNSX','phanloai.TenLoai','nhacungcap.TenNCC')
        ->join('nhasanxuat','ruou.MaNSX','=','nhasanxuat.MaNSX')
        ->join('phanloai','ruou.MaLoai','=','phanloai.MaLoai')
        ->join('nhacungcap','ruou.MaNCC','=','nhacungcap.MaNCC')
        ->get();

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
