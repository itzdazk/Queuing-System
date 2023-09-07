{{-- <!DOCTYPE html>
<html>
<head>
    <title>Create Registration</title>
</head>
<body>
    <h1>Create Registration</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('regisnumber.store') }}">
        @csrf
        <div>
            <label for="service_id">Service:</label>
            <select name="service_id" id="service_id" required>
                <option value="">-- Select Service --</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required>
        </div>
        
        <div>
            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html> --}}

@extends('layout.layout')


    
@section('badge')
            <span class="head-badge">Cấp số</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Danh sách cấp số</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Cấp số</span>
@endsection

@section('content')
<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
        <form method="POST" action="{{ route('regisnumber.store') }}">
            @csrf
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý thiết bị</h2>
        </div>

    
        <div class="col-12">
          <div class="card card-boder">
            <div class="card-body">
              <h4 class="bg-o">Thông tin thiết bị</h4>

              <div class="row mt-3">
                <div class="col-6 mt-3">
                  Dịch vụ <span class="text-danger">*</span><br />
                  <select class="my-form-control mt-3" name="service_id" id="service_id" required>
                    <option value="">-- Select Service --</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-6 mt-3">
                    Họ và tên <span class="text-danger">*</span><br />
                    <input type="text" class="my-form-control mt-3" name="full_name" id="full_name" value="{{ old('full_name') }}" required>
                </div>

                <div class="col-6 mt-3">
                  Số điện thoại <span class="text-danger">*</span><br />
                  <input type="text" class="my-form-control mt-3" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" required/>
                </div>
                <div class="col-6 mt-3">
                  Email <span class="text-danger">*</span><br />
                  <input class="my-form-control mt-3" type="email" name="email" id="email" value="{{ old('email') }}" required/>
                </div>
            </div>


                
                <div class="col-12 mt-3 mb-3">
                  <span class="text-danger">*</span> Là trường thông tin
                  bắt buộc
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-end mt-3">
            <a href="/regisnumber" class="cancel-btn">Hủy bỏ</a>
            </div>
            <div class="col-6 d-flex justify-content-start mt-3">
            <button class="submit-btn" type="submit" >Cấp số mới</button>
            </div>
        </div>
           
    </form> 
      </div>
    </div>
  </div>





@endsection