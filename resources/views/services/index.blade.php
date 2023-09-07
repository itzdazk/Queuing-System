{{-- <!-- resources/views/services/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Services</title>
</head>
<body>
    <h1>Services</h1>

    @if (count($services) > 0)
        <table>
            <thead>
                <tr>
                    <th>Service Code</th>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Detail</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->service_code }}</td>
                        <td>{{ $service->service_name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('services.detail', $service) }}">Detail</a>
                        </td>
                        <td>
                            <a href="{{ route('services.edit', $service) }}">Update Service</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No services found.</p>
    @endif
</body>
</html> --}}


@extends('layout.layout')

@section('badge')
<span class="head-badge">Dịch vụ</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Danh sách dịch vụ</span>
@endsection
@section('content')

<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-11" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý dịch vụ</h2>
        </div>
        <div class="col-4">
          <h5>Trạng thái hoạt động</h5>
        </div>
        <div class="col-5">
          <h5>Chọn thời gian</h5>
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
                <th scope="col">Mã dịch vụ</th>
                <th scope="col">Tên dịch vụ</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->service_code }}</td>
                        <td>{{ $service->service_name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->active ? 'Hoạt động' : 'Không hoạt động' }}</td>
                        <td>
                            <a href="{{ route('services.detail', $service) }}">Chi tiết</a>
                        </td>
                        <td>
                            <a href="{{ route('services.edit', $service) }}">Cập nhật</a>
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
        <a href="/services/create" class="text-decoration-none">
          <img src="{{ asset('assets/images/logo/add-square.png') }}" alt="" />
          <span style="color: #ff7506">Thêm dịch vụ</span>
        </a>
      </button>
    </div>
  </div>

@endsection