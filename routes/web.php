<?php

Route::resource('khoa', 'KhoaController'); /// sửa lại lần nữa

Route::resource('chuong_trinh_dao_tao', 'ChuongTrinhDaoTaoController');

Route::resource('lop', 'LopController');

Route::resource('sinh_vien', 'SinhVienController');

Route::any('hoc_phi', 'HocPhiController@getHocPhi');

Route::resource('hoa_don', 'HoaDonController');

Route::get('test', 'TestController@test');
