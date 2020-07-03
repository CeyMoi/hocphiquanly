<form action="{{ route('lop.store') }}" method="post">
    {{csrf_field()}}
    <!-- Mã khóa <input type="text" name="ma_khoa"> -->
    <!-- <br> -->
    Tên lớp <input type="text" name="ten_lop">
    <br>
    Mã khóa <input type="text" name="ma_khoa">
    <br>
    Mã ngành <input type="text" name="ma_nganh">


    <button>Thêm</button>
</form>