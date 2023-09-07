
@extends('layout.layout')

@section('badge')
<span class="head-badge">Thiết bị</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Danh sách thiết bị</span>
@endsection
@section('content')

<div class="main-panel w-100 row" style="background-color: #f3f3f3">
  <div class="content-wrapper col-11" style="padding-top: 10px">
    <div class="row px-3">
      <div class="col-12 pb-4" style="color: #ff7506">
        <h2>Danh sách thiết bị</h2>
      </div>
      <div class="col-4">
        <h5>Trạng thái hoạt động</h5>
      </div>
      <div class="col-5">
        <h5>Trạng thái kết nối</h5>
      </div>
      <div class="col-3">
        <h5>Từ khóa</h5>
      </div>
      <div class="col-4">
        <select name="active" id="active" class="form-select-device">
          <option value="">Tất cả</option>
          <option value="0">Ngưng hoạt động</option>
          <option value="0">Đang hoạt động</option>
        </select>
      </div>
      <div class="col-5">
        <select name="status" id="status" class="form-select-device">
          <option value="">Tất cả</option>
          <option value="0">Mất kết nối</option>
          <option value="0">Kết nối</option>
        </select>
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
              <th scope="col">Mã thiết bị</th>
              <th scope="col">Tên thiết bị</th>
              <th scope="col">Địa chỉ IP</th>
              <th scope="col">Trạng thái hoạt động</th>
              <th scope="col">Trạng thái kết nối</th>
              <th scope="col">Dịch vụ sử dụng</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($devices as $device)
            <tr>
                <td>{{ $device->device_code }}</td>
                <td>{{ $device->device_name }}</td>
                <td>{{ $device->ip_address }}</td>
                <td>{{ $device->active ? 'Đang hoạt động':'Ngừng hoạt động' }}</td>
                <td>{{ $device->connect ? 'Kết nối':'Mất kết nối' }}</td>
                <td>
                    <ul>
                        @foreach ($device->services as $service)
                            {{ $service->service_name }}
                        @endforeach
                    </ul>
                </td>
                <td>
                    <a href="{{ route('devices.detail', $device) }}">Chi tiết</a>
                </td>
                <td>
                    <a href="{{ route('devices.edit', $device) }}">Cập nhật</a>
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
      <a href="/devices/create" class="text-decoration-none">
        <img src="{{ asset('assets/images/logo/add-square.png')}}" alt="" />
        <span style="color: #ff7506">Thêm thiết bị</span>
      </a>
    </button>
  </div>
</div>

@endsection
