{{-- <!-- roles/index.blade.php -->
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ $role->des }}</td>
                <td>
                    <a href="{{ route('roles.edit', $role) }}">Update Service</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}


@extends('layout.layout')

@section('badge')
<span class="head-badge">Cấp số</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Danh sách dịch vụ</span>
@endsection
@section('content')

<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-11" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý cấp số</h2>
        </div>
        <div class="col-12 d-flex justify-content-end">
            
            <div class="col-3">
                <h5>Từ khóa</h5>
            </div>
          </div>
        <div class="col-12 d-flex justify-content-end">
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
                <th scope="col">Tên vai trò</th>
                <th scope="col">Số người dùng</th>
                <th scope="col">Mô tả</th>
                <th scope="col"></th>
        
              </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->des }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role) }}">Cập nhật</a>
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
        <a href="/roles/create" class="text-decoration-none">
          <img src="{{ asset('assets/images/logo/add-square.png') }}" alt="" />
          <span style="color: #ff7506">Thêm vai trò</span>
        </a>
      </button>
    </div>
  </div>
@endsection