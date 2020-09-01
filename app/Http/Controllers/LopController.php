<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lop;

class LopController extends Controller
{

    public function index(Request $request)
    {
        $ten_lop   = $request->get('ten_lop');
        $array_lop = Lop::where('ten_khoa', 'like', "%$ten_lop%")
            ->join('khoa', 'khoa.ma_khoa', 'lop.ma_khoa')
            ->join('chuong_trinh_dao_tao', 'chuong_trinh_dao_tao.ma_nganh', 'lop.ma_nganh')
            ->paginate(10);
        $title = 'Xem tất cả Lớp';
        return view('lop.index', compact('array_lop', 'ten_lop', 'title'));
    }


    public function create()
    {
        return view('lop.create');
    }


    public function store(Request $request)
    {
        $lop            = new Lop();
        $lop->ma_lop    = $request->get('ma_lop');
        $lop->ten_lop   = $request->get('ten_lop');
        $lop->ma_khoa   = $request->get('ma_khoa');
        $lop->ma_nganh  = $request->get('ma_nganh');
        $lop->save();
    }


    public function show(Lop $lop)
    {
        //
    }


    public function edit($id)
    {
        $lop = Lop::where('ma_lop', $id)->first();
        return view('lop.edit', compact('lop'));
    }


    public function update(Request $request, $id)
    {
        $lop            = Lop::where('ma_lop', $id)->first();
        $lop->ma_lop    = $request->get('ma_lop');
        $lop->ten_lop   = $request->get('ten_lop');
        $lop->ma_khoa   = $request->get('ma_khoa');
        $lop->ma_nganh  = $request->get('ma_nganh');
        $lop->save();
    }


    public function destroy($id)
    {
        Lop::where('ma_lop', $id)->delete();
    }
}
