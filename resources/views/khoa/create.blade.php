@extends('layout.master')


@section('content')

<form action="{{ route('khoa.store') }}" method="post">
    {{csrf_field()}}
    <!-- Mã khóa <input type="text" name="ma_khoa"> -->
    <!-- <br> -->
    Tên khóa <input type="text" name="ten_khoa" class="form-control">
    <br>
    Thời gian bắt đầu <input type="date" name="thoi_gian_bat_dau" class="form-control">
    <br>
    Thời gian kết thúc <input type="date" name="thoi_gian_ket_thuc" class="form-control">

    <br>
    <button class="btn btn-primary">Thêm</button>
</form>

@endsection