@extends('layout.layout')

@section('badge')
<span class="head-badge">Cấp số</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Danh sách cấp số</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Chi tiết</span>
@endsection
@section('content')
<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý cấp số</h2>
        </div>

        <div class="col-12">
          <div class="card card-boder">
            <div class="card-body">
              <h4 class="bg-o">Thông tin cấp số</h4>
              <div class="row">
                <div class="col-6 mt-4">
                  Họ tên: <span class="bg-g">{{ $regisnumber->full_name }}</span>
                </div>
                <div class="col-6 mt-4">
                  Nguồn cấp: <span class="bg-g">{{ $regisnumber->source  }}</span>
                </div>
                <div class="col-6 mt-4">
                 Tên dịch vụ: <span class="bg-g">{{ $regisnumber->service->service_name }}</span>
                </div>
                <div class="col-6 mt-4">
                  Trạng thái: <span class="bg-g">{{ $regisnumber->status }}</span>
                </div>
                <div class="col-6 mt-4">
                  Số thứ tự: <span class="bg-g">{{ $regisnumber->order_number}}</span>
                </div>
                <div class="col-6 mt-4">
                  Điện thoại: <span class="bg-g">{{ $regisnumber->phone_number}}</span>
                </div>
                <div class="col-6 mt-4">
                   Thời hạn cấp: <span class="bg-g">{{ $regisnumber->created_at}}</span>
                  </div>
                  <div class="col-6 mt-4">
                    Địa chỉ email: <span class="bg-g">{{ $regisnumber->email}}</span>
                   </div>
                   <div class="col-6 mt-4 add-padding">
                    Hạn sử dụng: <span class="bg-g">{{ $regisnumber->created_at->addHours(4)}}</span>
                   </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection