<a href="{{route('chuong_trinh_dao_tao.create')}}">
	Thêm
</a>
<table border="1" width="100">
	<caption>
		<form>
			Tìm kiếm <input type="search" name="ten_nganh" value="{{$ten_nganh}}">
		</form>
	</caption>
<tr>
	<th>Mã ngành</th>
    <th>Tên ngành</th>
    <th>Học phí theo tháng</th>
   
	
	<th>Xem</th>
	<th>Sửa</th>
	<th>Xóa</th>
</tr>

@foreach ($array_chuong_trinh_dao_tao as $chuong_trinh_dao_tao)
	<tr>
		<td>
			{{$chuong_trinh_dao_tao->ma_nganh}}
		</td>

		<td>
			{{$chuong_trinh_dao_tao->ten_nganh}}
        </td>
        
        <td>
            {{$chuong_trinh_dao_tao->hoc_phi_theo_thang}}
        </td>


		

		<td>
			<a href="{{ route('chuong_trinh_dao_tao.show',['id' => $chuong_trinh_dao_tao->ma_nganh ]) }}">
				Xem
			</a>
		</td>

		<td>
			<a href="{{ route('chuong_trinh_dao_tao.edit',['id' => $chuong_trinh_dao_tao->ma_nganh ]) }}">
				Sửa
			</a>
		</td>

		<td>
			<form action="{{ route('chuong_trinh_dao_tao.destroy',['id' => $chuong_trinh_dao_tao->ma_nganh ]) }}" method="post">
				<input type="submit" value="Xóa">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</td>
	</tr>
@endforeach

</table>
{{ $array_chuong_trinh_dao_tao->links() }}