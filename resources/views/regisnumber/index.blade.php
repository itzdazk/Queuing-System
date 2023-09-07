
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
        <div class="col-2">
          <h5>Tên dịch vụ</h5>
        </div>
        <div class="col-2">
          <h5>Tình trạng</h5>
        </div>
        <div class="col-5">
          <h5>Chọn thời gian</h5>
        </div>
        <div class="col-3">
            <h5>Từ khóa</h5>
          </div>
        <div class="col-2">
          <select name="active" id="active" class="form-select-device">
            <option value="">Tất cả</option>
            <option value="0">Ngưng hoạt động</option>
            <option value="0">Đang hoạt động</option>
          </select>
        </div>
        <div class="col-2">
            <select name="active" id="active" class="form-select-device">
              <option value="">Tất cả</option>
              <option value="0">Ngưng hoạt động</option>
              <option value="0">Đang hoạt động</option>
            </select>
          </div>
        <div class="col-5">
          <input type="date" class="form-select-device" />
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
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Tên dịch vụ</th>
                <th scope="col">Thời gian cấp</th>
                <th scope="col">Hạn sử dụng</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Nguồn cấp</th>
                <th scope="col"></th>
        
              </tr>
            </thead>
            <tbody>
                @foreach ($regisnumbers as $regisnumber)
                <tr>
                    <td>{{ $regisnumber->order_number }}</td>
                    <td>{{ $regisnumber->full_name }}</td>
                    <td>{{ $regisnumber->service->service_name }}</td>
                    <td>{{ $regisnumber->created_at }}</td>
                    <td>{{ $regisnumber->created_at->addHours(4) }}</td>
                    <td>{{ $regisnumber->status }}</td>
                    <td>{{ $regisnumber->source }}</td>
                    <td>
                        <a href="{{ route('regisnumber.detail', $regisnumber) }}">Chi tiết</a>
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
        <a href="/regisnumber/create" class="text-decoration-none">
          <img src="{{ asset('assets/images/logo/add-square.png') }}" alt="" />
          <span style="color: #ff7506">Cấp số mới</span>
        </a>
      </button>
    </div>
  </div>
@endsection