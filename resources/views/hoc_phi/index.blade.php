 @extends('layout.master')
 

 @section('content')
 <table class="table table-hover">
     
         <tr>
             <th>Mã sinh viên</th>
             <th>Tên</th>
             <th>Mã lớp</th>
             <th>số tháng đã học</th>
             <th>tổng tiền phải đóng</th>
             <th>Mã khóa</th>
             <th>Mã Ngành</th>
             <th>Học phí phải đóng theo tháng</th>
             <th>Số tiền đã đóng</th>
             <th>Tình trạng</th>
             <th>Thành tiền</th>
             <th>Nợ/Thừa tháng</th>

         </tr>
     
     
     @foreach ($arr_sinh_vien as $each)

     <tr>

         <td>
             {{$each->ma_sinh_vien}}
         </td>

         <td>
             {{$each->name}}
         </td>

         <td>
             {{$each->ma_lop}}
         </td>

         <td>
             {{$each->so_thang}}
         </td>

         <td>
             {{$each->tong_tien_dong}}
         </td>

         <td>
             {{$each->ma_khoa}}
         </td>

         <td>
             {{$each->ma_nganh}}
         </td>

         <td>
             {{$each->hoc_phi_theo_thang}}
         </td>

         <td>
             {{$each->da_dong}}
         </td>

         <td>
             {{$each->tinh_trang}}
         </td>

         <td>
             {{$each->tien}}
         </td>

         <td>
             {{$each->thang}}
         </td>
     </tr>
     @endforeach
     

 </table>
@endsection