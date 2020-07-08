@extends('layout.master')


@section('content')
<form action="{{ route('khoa.update',['id'=> $khoa->ma_khoa]) }}" method="post">
    <input type="hidden" name="_method" value="PUT" class="form-control">
    {{csrf_field()}}
    Mã khóa <input type="text" name="ma_khoa" class="form-control">
    <br>
    Tên khóa <input type="text" name="ten_khoa" class="form-control">
    <br>
    Thời gian bắt đầu <input type="date" name="thoi_gian_bat_dau" class="form-control">
    <br>
    Thời gian kết thúc <input type="date" name="thoi_gian_ket_thuc" class="form-control">

    <br>
    <button class="btn btn-primary">Sửa</button>
</form>
@endsection