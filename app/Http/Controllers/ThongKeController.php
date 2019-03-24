<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ThongKeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = '2019';
        $result = DB::select(DB::raw('SELECT if(tongtien IS NULL, 0, tongtien) tongtien, months.name FROM
        (SELECT SUM(thanhtien) tongtien, month FROM tongtien_cachd tt WHERE year='.$year.' GROUP BY month, year) tb_tongtien
        RIGHT JOIN months ON tb_tongtien.month = months.id'));

        return [
            'labels' => ['Tháng 1', 'Tháng 2', 'Tháng 3','Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            'datasets' => array([
                'label' => 'Doanh thu trong năm '.$year,
                'backgroundColor' => '#ccc',
                'data' => [$result[0]->tongtien, $result[1]->tongtien, $result[2]->tongtien, $result[3]->tongtien,
                            $result[4]->tongtien, $result[5]->tongtien, $result[6]->tongtien, $result[7]->tongtien,
                            $result[8]->tongtien, $result[9]->tongtien, $result[10]->tongtien, $result[11]->tongtien]
            ])
        ];
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

    public function layNam(){
        return DB::select(DB::raw('SELECT DISTINCT YEAR(updated_at) year FROM hoadon'));
    }

    public function layThongKeTheoNam(){
        $year = \Request::get('y');
        $result = DB::select(DB::raw('SELECT if(tongtien IS NULL, 0, tongtien) tongtien, months.name FROM
        (SELECT SUM(thanhtien) tongtien, month FROM tongtien_cachd tt WHERE year='.$year.' GROUP BY month, year) tb_tongtien
        RIGHT JOIN months ON tb_tongtien.month = months.id'));

        return [
            'labels' => ['Tháng 1', 'Tháng 2', 'Tháng 3','Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            'datasets' => array([
                'label' => 'Doanh thu trong năm '.$year,
                'backgroundColor' => '#ccc',
                'data' => [$result[0]->tongtien, $result[1]->tongtien, $result[2]->tongtien, $result[3]->tongtien,
                            $result[4]->tongtien, $result[5]->tongtien, $result[6]->tongtien, $result[7]->tongtien,
                            $result[8]->tongtien, $result[9]->tongtien, $result[10]->tongtien, $result[11]->tongtien]
            ])
        ];
    }
}
