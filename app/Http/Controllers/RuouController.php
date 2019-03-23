<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruou;

class RuouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ruou::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request['MaNSX'];
        $this->validate($request, [
            'TenRuou' => 'required|string|max:50',
        ]);
        return ruou::create([
            'MaRuou' => $request['MaRuou'],
            'TenRuou' => $request['TenRuou'],
            'MaNSX' => $request['MaNSX'],
            'MaLoai' => $request['MaLoai'],
            'MaNCC' => $request['MaNCC'],
            'SoLuong' => $request['SoLuong'],
            'DonGia' => $request['DonGia'],
            'AnhRuou' => $request['AnhRuou'],
            'Mota' => $request['Mota'],
        ]);
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
    public function update(Request $request, $ruou_id)
    {
        ruou::findOrFail($ruou_id)->update($request->all());
        return response()->json(['success'=>'success'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ruou_id)
    {
        ruou::findOrFail($ruou_id)->delete();
        return response()->json(['success'=>'success'],200);
    }
    public function TimKiemRuou(){
        if($Search = \Request::get('q')){
            if($ncc = \Request::get('ncc')){
                return ruou::where('TenRuou', 'LIKE', "%$Search%")
                    ->where('MaNCC', $ncc)->get();
            }
            if($nsx = \Request::get('nsx')){
                return ruou::where('TenRuou', 'LIKE', "%$Search%")
                    ->where('MaNSX', $nsx)->get();
            }
            if($loai = \Request::get('loai')){
                return ruou::where('TenRuou', 'LIKE', "%$Search%")
                    ->where('MaLoai', $loai)->get();
            }else{
                return ruou::where('TenRuou', 'LIKE', "%$Search%")->get();
            }
        }else{
            if($ncc = \Request::get('ncc')){
                return ruou::where('MaNCC', $ncc)->get();
            }
            if($nsx = \Request::get('nsx')){
                return ruou::where('MaNSX', $nsx)->get();
            }
            if($loai = \Request::get('loai')){
                return ruou::where('MaLoai', $loai)->get();
            }else{
                return ruou::all();
            }
        }
    }

}
