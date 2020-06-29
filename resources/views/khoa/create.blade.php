<form action="{{ route('khoa.store') }}" method="post">
    {{csrf_field()}}
    <!-- Mã khóa <input type="text" name="ma_khoa"> -->
    <!-- <br> -->
    Tên khóa <input type="text" name="ten_khoa">
    <br>
    Thời gian bắt đầu <input type="date" name="thoi_gian_bat_dau">
    <br>
    Thời gian kết thúc <input type="date" name="thoi_gian_ket_thuc">


    <button>Thêm</button>
</form>