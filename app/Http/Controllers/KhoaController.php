<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khoa;


class KhoaController extends Controller
{

    public function index(Request $request)
    {
        $ten_khoa   = $request->get('ten_khoa');
        $array_khoa = Khoa::where('ten_khoa', 'like', "%$ten_khoa%")->paginate(2);
        return view('khoa.index', compact('array_khoa', 'ten_khoa'));
    }


    public function create()
    {
        return view('khoa.create');
    }


    public function store(Request $request)
    {
        $khoa                       = new Khoa();
        $khoa->ma_khoa              = $request->get('ma_khoa');
        $khoa->ten_khoa             = $request->get('ten_khoa');
        $khoa->thoi_gian_bat_dau    = $request->get('thoi_gian_bat_dau');
        $khoa->thoi_gian_ket_thuc   = $request->get('thoi_gian_ket_thuc');
        $khoa->save();
    }


    public function show(Khoa $khoa)
    {
        //
    }


    public function edit($id)
    {
        $khoa = Khoa::where('ma_khoa', $id)->first();
        return view('khoa.edit', compact('khoa'));
    }


    public function update(Request $request, Khoa $khoa)
    {
        $khoa                           = Khoa::where('ma_khoa', $id)->first();
        $khoa->ma_khoa                  = $request->get('ma_khoa');
        $khoa->ten_khoa                 = $request->get('ten_khoa');
        $khoa->thoi_gian_bat_dau        = $request->get('thoi_gian_bat_dau');
        $khoa->thoi_gian_ket_thuc       = $request->get('thoi_gian_ket_thuc');
        $khoa->save();
    }

    public function destroy($id)
    {
        Khoa::where('ma_khoa', $id)->delete();
    }
}
