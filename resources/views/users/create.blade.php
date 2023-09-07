

@extends('layout.layout')


    
@section('badge')
            <span class="head-badge">Cài đặt hệ thống</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Quản lý tài khoản</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Thêm tài khoản</span>
@endsection

@section('content')
<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý tài khoản</h2>
        </div>

    
        <div class="col-12">
          <div class="card card-boder">
            <div class="card-body">
              <h4 class="bg-o">Thông tin tài khoản</h4>

              <div class="row mt-3">
                <div class="col-6 mt-3">
                  Họ tên <span class="text-danger">*</span><br />
                  <input type="text" name="full_name" id="full_name" required class="my-form-control mt-3" >
                </div>

                <div class="col-6 mt-3">
                    Tên đăng nhập <span class="text-danger">*</span><br />
                    <input type="text" class="my-form-control mt-3" type="text" name="username" id="username" required>
                </div>

                <div class="col-6 mt-3">
                  Số điện thoại <span class="text-danger">*</span><br />
                  <input type="text" name="phone_number" id="phone_number" class="my-form-control mt-3" required/>
                </div>
                <div class="col-6 mt-3">
                  Mật khẩu <span class="text-danger">*</span><br />
                  <input class="my-form-control mt-3" type="password" name="password" id="password" required/>
                </div>

                <div class="col-6 mt-3">
                    Email <span class="text-danger">*</span><br />
                    <input class="my-form-control mt-3" type="email" name="email" id="email"  required/>
                  </div>

                  <div class="col-6 mt-3">
                    Nhập lại mật khẩu <span class="text-danger">*</span><br />
                    <input class="my-form-control mt-3" type="password" name="cfpassword" id="password" required/>
                  </div>

                  <div class="col-6 mt-3">
                    Vai trò <span class="text-danger">*</span><br />
        
                    <select class="my-form-control mt-3" name="role_id" id="role_id" required>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="col-6 mt-3">
                    Tình trạng <span class="text-danger">*</span><br />
                    <select class="my-form-control mt-3"id="active" name="active" required>
                        <option value="0">Ngưng hoạt động</option>
                        <option value="1">Hoạt động</option>
                    </select>
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
            <button class="submit-btn" type="submit" >Tạo TK mới</button>
            </div>
        </div>
           
    </form> 
      </div>
    </div>
  </div>





@endsection