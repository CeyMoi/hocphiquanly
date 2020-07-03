<form action="{{ route('lop.update',['id'=> $lop->ma_lop]) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    Mã lớp <input type="text" name="ma_lop">
    <br>
    Tên lớp <input type="text" name="ten_lop">
    <br>
    Mã khóa <input type="text" name="ma_khoa">
    <br>
    Mã ngành <input type="text" name="ma_nganh">


    <button>Sửa</button>
</form>