<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use App\HoaDon;
use App\User;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ls_prod = $request->carts['ls_prod'];
        DB::table('hoadon')->insert(['MaNV' => $request->user_id, 'MaKH' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        foreach ($ls_prod as $key => $value) {
            DB::table('chitiethoadon')->insert([
                'MaHD' => DB::table('hoadon')->max('MaHD'),
                'MaRuou' => $value['id'],
                'SoLuong' => $value['quantity'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        return response()->json(['isSuccess' => true]);
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
