<a href="{{route('khoa.create')}}">
	Thêm
</a>
<table border="1" width="100">
	<caption>
		<form>
			Tìm kiếm <input type="search" name="ten_khoa" value="{{$ten_khoa}}">
		</form>
	</caption>
<tr>
	<th>Mã khóa</th>
    <th>Tên khóa</th>
    <th>Thời gian bắt đầu</th>
    <th>Thời gian kết thúc</th>
	
	<th>Xem</th>
	<th>Sửa</th>
	<th>Xóa</th>
</tr>

@foreach ($array_khoa as $khoa)
	<tr>
		<td>
			{{$khoa->ma_khoa}}
		</td>

		<td>
			{{$khoa->ten_khoa}}
        </td>
        
        <td>
            {{$khoa->thoi_gian_bat_dau}}
        </td>

        <td>
            {{$khoa->thoi_gian_ket_thuc}}
        </td>

		

		<td>
			<a href="{{ route('khoa.show',['id' => $khoa->ma_khoa ]) }}">
				Xem
			</a>
		</td>

		<td>
			<a href="{{ route('khoa.edit',['id' => $khoa->ma_khoa ]) }}">
				Sửa
			</a>
		</td>

		<td>
			<form action="{{ route('khoa.destroy',['id' => $khoa->ma_khoa ]) }}" method="post">
				<input type="submit" value="Xóa">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</td>
	</tr>
@endforeach

</table>
{{ $array_khoa->links() }}