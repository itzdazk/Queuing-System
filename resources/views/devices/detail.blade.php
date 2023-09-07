@extends('layout.layout')

@section('badge')
<span class="head-badge">Thiết bị</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Danh sách thiết bị</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Chi tiết thiết bị</span>
@endsection


@section('content')
<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý thiết bị</h2>
        </div>

        <div class="col-12">
          <div class="card card-boder">
            <div class="card-body">
              <h4 class="bg-o">Thông tin thiết bị</h4>
              <div class="row">
                <div class="col-6 mt-4">
                  Mã thiết bị: <span class="bg-g">{{ $device->device_code }}</span>
                </div>
                <div class="col-6 mt-4">
                  Loại thiết bị: <span class="bg-g">{{ $device->device_type }}</span>
                </div>
                <div class="col-6 mt-4">
                 Tên thiết bị: <span class="bg-g">{{ $device->device_name }}</span>
                </div>
                <div class="col-6 mt-4">
                  Tên đăng nhập: <span class="bg-g">{{ $device->username }}</span>
                </div>
                <div class="col-6 mt-4">
                  Địa chỉ IP: <span class="bg-g">{{ $device->ip_address}}</span>
                </div>
                <div class="col-6 mt-4">
                  Mật khẩu: <span class="bg-g">{{ $device->password}}</span>
                </div>
                <div class="col-12 mt-4">Dịch vụ</div>
                <div class="col-12 mt-4 bg-g add-padding">
                    @foreach ($device->services as $service)
                    {{ $service->service_name }}
                    @endforeach
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection