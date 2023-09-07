{{-- <!-- resources/views/services/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Service</title>
</head>
<body>
    <h1>Thông tin cá nhân</h1>


        <div>
            <label for="full_name">Tên người dùng</label>
            <input type="text" name="full_name" id="full_name" value="{{ $user->full_name }}" readonly >
        </div>
        <div>
            <label for="username">Tên đn:</label>
            <input type="text" name="username" id="username" value="{{ $user->username }}" readonly>
        </div>
        <div>
            <label for="phone_number">SĐT:</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}" readonly>
        </div>
        <div>
            <label for="password">MK:</label>
            <input type="text" name="password" id="password" readonly>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="{{ $user->email }}" readonly>
        </div>
        <div>
            <label for="role">Vai trò:</label>
            <input type="text" name="role" id="role" value="{{ $user->role->name }}" readonly>
        </div>
</body>
</html> --}}

@extends('layout.layout')


    
@section('badge')

          <span class="head-badge">Thông tin cá nhân</span>
@endsection
    @section('content')
<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-11" style="padding-top: 10px">
      <div class="col-12 mt-5 pt-3">
        <div class="card">
            <div class="card-body">
        

                <div class="row mt-3">
                  <div class="col-6 mt-3">
                    Tên người dùng <span class="text-danger">*</span><br />
                    <input type="text" name="full_name" id="full_name" value="{{ $user->full_name }}" readonly class="my-form-control mt-3" />
                  </div>

                  <div class="col-6 mt-3">
                      Tên đăng nhập <span class="text-danger">*</span><br />
                      <input type="text" name="full_name" id="full_name" value="{{ $user->full_name }}" readonly class="my-form-control mt-3" />
                  </div>

                  <div class="col-6 mt-3">
                    Số điện thoại <span class="text-danger">*</span><br />
                    <input type="text" class="my-form-control mt-3" name="phone_number" id="phone_number" value="{{ $user->phone_number }}" readonly/>
                  </div>
                  <div class="col-6 mt-3">
                   Mật khẩu <span class="text-danger">*</span><br />
                    <input type="password" class="my-form-control mt-3" name="password" id="password" readonly value="******"/>
                  </div>
                  <div class="col-6 mt-3">
                   Email <span class="text-danger">*</span><br />
                    <input type="email" class="my-form-control mt-3" name="email" id="email" value="{{ $user->email }}" readonly/>
                  </div>
                  <div class="col-6 mt-3">
                    Vai trò <span class="text-danger">*</span><br />
                    <input type="text" class="my-form-control mt-3" name="role" id="role" value="{{ $user->role->name }}" readonly/>
                  </div>

              </div>
        </div>
      </div>
    </div>
  </div>

  @endsection