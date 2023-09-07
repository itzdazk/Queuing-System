

@extends('layout.layout')

@section('badge')
<span class="head-badge">Cài đặt</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Quản lý tài khoản</span>
@endsection
@section('content')

<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-11" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý tài khoản</h2>
        </div>
        <div class="col-9">
          <h5>Tên dịch vụ</h5>
        </div>
        
        <div class="col-3">
          <h5>Chọn thời gian</h5>
        </div>
        
        <div class="col-9">
            <div class="col-4">
                <select name="active" id="active" class="form-select-device">
                  <option value="">Tất cả</option>
                  <option value="0">Ngưng hoạt động</option>
                  <option value="0">Đang hoạt động</option>
                </select>
              </div>
        </div>
        <div class="col-3">
          <input
            type="text"
            class="search-input"
            placeholder="Nhập từ khóa"
          />
        </div>
      </div>
      <div class="row p-3">
        <div class="col-md-12">
          <table class="styled-table">
            <thead>
              <tr>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"></th>
        
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->active ? 'Hoạt động':'Ngưng hoạt động'}}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}">Cập nhật </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-1 h-100" style="padding-top: 145px">
      <button class="add-new-btn">
        <a href="/users/create" class="text-decoration-none">
          <img src="{{ asset('assets/images/logo/add-square.png') }}" alt="" />
          <span style="color: #ff7506">Thêm tài khoản</span>
        </a>
      </button>
    </div>
  </div>
@endsection