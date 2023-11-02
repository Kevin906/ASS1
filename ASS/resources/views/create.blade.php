@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-hearder">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('sinhvien.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>giáo viên</strong>
                                <input type="text" class="form-control" placeholder="nhập tên giáo viên">
                            </div>
                            <div class="from-group">
                                <strong>Mã sinh viên</strong>
                                <input type="text" name="MaSV" class="from-control" placeholder="Nhập mã sinh viên">
                            </div>
                            <div class="from-group">
                                <strong>Họ tên</strong>
                                <input type="text" name="HoTen" class="from-control" placeholder="Nhập họ tên sinh viên">
                            </div>
                            <div class="from-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="NgaySinh" class="from-control">
                            </div> 
                            <div class="col-md-6">
                                <div class="from-group">
                                    <strong>Giới tính</strong>
                                    <select name="GioiTinh" class="from-select">
                                        <option selected="Chọn giới tính"></option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nu">Nữ</option>
                                    </select>   
                                </div>
                                <div class="from-group">
                                    <strong>Số điện thoại</strong>
                                    <input type="text" name="SoDT" class="from-control" placeholder="Nhập số ĐT">
                                </div>
                                <div class="row">
                            </div>        
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection