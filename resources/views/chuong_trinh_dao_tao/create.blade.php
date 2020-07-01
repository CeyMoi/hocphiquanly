<form action="{{ route('chuong_trinh_dao_tao.store') }}" method="post">
    {{csrf_field()}}
   
    Tên ngành <input type="text" name="ten_nganh">
    <br>
    Học phí theo tháng <input type="text" name="hoc_phi_theo_thang">
    <br>
    <button>Thêm</button>
</form>