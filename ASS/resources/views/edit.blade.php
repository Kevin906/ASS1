@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-hearder">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('sinhvien.update', $sinhvien->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="from-group">
                                <strong>Mã sinh viên</strong>
                                <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" class="from-control" placeholder="Nhập mã sinh viên">
                            </div>
                            <div class="from-group">
                                <strong>Họ tên</strong>
                                <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" class="from-control" placeholder="Nhập họ tên sinh viên">
                            </div>
                            <div class="from-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="NgaySinh" value="{{$sinhvien->NgaySinh}}" class="from-control">
                            </div> 
                            <div class="col-md-6">
                                <div class="from-group">
                                    <strong>Giới tính</strong>
                                    <select name="GioiTinh" class="from-select">
                                        <option selected="Chọn giới tính"></option>
                                        <option value="Nam" {{$sinhvien->GioiTinh == "Nam" ? 'selected' : ''}} >Nam</option>
                                        <option value="Nữ" {{$sinhvien->GioiTinh == "Nữ" ? 'selected' : ''}}>Nữ</option>
                                    </select>   
                                </div>
                                <div class="from-group">
                                    <strong>Số điện thoại</strong>
                                    <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" class="from-control" placeholder="Nhập số ĐT">
                                </div>
                            </div>        
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection