<form action="{{ route('sinh_vien.store') }}" method="post">
  {{csrf_field()}}
  <!-- Mã sinh viên <input type="text" name="ma_sinh_vien">
  <br> -->
  Email <input type="text" name="email" class="form-control">
  <br>
  Mật khẩu <input type="text" name="mat_khau" class="form-control">
  <br>
  Tên sinh viên <input type="text" name="ten_sinh_vien" class="form-control">
  <br>
  Ngày sinh <input type="text" name="ngay_sinh" class="form-control">
  <br>
  Địa chỉ <input type="text" name="dia_chi" class="form-control">
  <br>
  Số điện thoại <input type="number" name="so_dien_thoai" class="form-control">
  <br>
  Giới tính <select name="gioi_tinh"  class="form-control">
    <option value="1">
      Nam
    </option>

    <option value="2">
      Nữ
    </option>
  </select>
  <br>
  
  Mã lớp <input type="text" name="ma_lop" class="form-control">
  <br>
  Thời gian nhập học <input type="date" name="thoi_gian_nhap_hoc">
  <button>Thêm</button>
</form>