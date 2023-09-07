{{-- <!-- resources/views/services/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Service</title>
</head>
<body>
    <h1>Edit Service</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('services.update', $service) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="service_code">Service Code:</label>
            <input type="text" name="service_code" id="service_code" value="{{ $service->service_code }}" required>
        </div>
        <div>
            <label for="service_name">Service Name:</label>
            <input type="text" name="service_name" id="service_name" value="{{ $service->service_name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $service->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>


 --}}




@extends('layout.layout')

@section('badge')
            <span class="head-badge">Dịch vụ</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Danh sách dịch vụ</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Cập nhật </span>
@endsection
@section('content')

<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
        <form method="POST" action="{{ route('services.update', $service) }}">
            @csrf
            @method('PUT')
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý dịch vụ</h2>
        </div>

        <div class="col-12">
          <div class="card card-boder">
            <div class="card-body">
              <h4 class="bg-o">Thông tin dịch vụ</h4>

              <div class="row mt-3">
                <div class="col-6 mt-3 ps-0">
                  <div class="col-12">
                    Mã dịch vụ <span class="text-danger">*</span><br />
                    <input type="text" name="service_code" id="service_code" value="{{ $service->service_code }}" required class="my-form-control mt-3" />
                  </div>
                  <div class="col-12">
                    Tên dịch vụ <span class="text-danger">*</span><br />
                    <input type="text" name="service_name" id="service_name" value="{{ $service->service_name }}" required class="my-form-control mt-3" />
                  </div>
                </div>

                <div class="col-6 mt-3">
                 Mô tả <span class="text-danger">*</span><br />
                  <textarea
                    cols="60"
                    rows="5"
                    class="my-textarea mt-3"name="description" id="description" required>{{ $service->description }}</textarea>
                </div>

                <div class="col-12 mt-3">
                  <h4 class="bg-o">Quy tắc cấp số</h4>
                  <div class="col-12 mt-3">
                    <input type="checkbox" checked />Tăng tự đọng từ :
                    <input type="text" class="small-input-text" value="001"/> đến
                    <input type="text" class="small-input-text" value="999" />
                  </div>
                  <div class="col-12 mt-3">
                    <input type="checkbox"checked />Prefix :
                    <input type="text" class="small-input-text" value="1"/>
                  </div>
                  <div class="col-12 mt-3">
                    <input type="checkbox"checked />Surfix :
                    <input type="text" class="small-input-text" value="1"/>
                  </div>
                  <div class="col-12 mt-3">
                    <input type="checkbox"checked />Reset mỗi ngày :
                  </div>
                </div>

                <div class="col-12 mt-3 mb-3">
                  <span class="text-danger">*</span> Là trường thông tin
                  bắt buộc
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 d-flex justify-content-end mt-3">
          <a href="index.html" class="cancel-btn">Hủy bỏ</a>
        </div>
        <div class="col-6 d-flex justify-content-start mt-3">
          <button class="submit-btn" type="submit">Cập nhật dv</button>
        </div>
      </div>
    </form>
    </div>
  </div>

  @endsection

