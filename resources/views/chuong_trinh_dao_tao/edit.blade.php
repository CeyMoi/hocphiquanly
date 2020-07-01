<form action="{{ route('chuong_trinh_dao_tao.update',['id'=> $chuong_trinh_dao_tao->ma_nganh]) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
   
    Tên ngành <input type="text" name="ten_nganh">
    <br>
    Học phí theo tháng <input type="text" name="hoc_phi_theo_thang">

    <button>Sửa</button>
</form>