
    @extends('layout.layout')


    
@section('badge')
<span class="head-badge">Thiết bị</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Danh sách thiết bị</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Thêm thiết bị</span>
@endsection
    @section('content')
    <div class="main-panel w-100 row" style="background-color: #f3f3f3">
        <div class="content-wrapper col-12" style="padding-top: 10px">
            <form method="POST" action="{{ route('devices.store') }}">
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
                      Mã thiết bị <span class="text-danger">*</span><br />
                      <input type="text" name="device_code" id="device_code" required class="my-form-control mt-3" />
                    </div>

                    <div class="col-6 mt-3">
                        Loại thiết bị <span class="text-danger">*</span><br />
                      <select name="device_type" id="device_type" class="my-form-control mt-3">
                        <option value="Kios">Kios</option>
                        <option value="Hệ thống 1">Hệ thống 1</option>
                        <option value="Hệ thống 2">Hệ thống 2</option>
                      </select>
                    </div>

                    <div class="col-6 mt-3">
                      Tên thiết bị <span class="text-danger">*</span><br />
                      <input type="text" class="my-form-control mt-3" name="device_name" id="device_name" required/>
                    </div>
                    <div class="col-6 mt-3">
                      Tên đăng nhập <span class="text-danger">*</span><br />
                      <input type="text" class="my-form-control mt-3" name="username" id="username" required/>
                    </div>
                    <div class="col-6 mt-3">
                      Địa chỉ IP <span class="text-danger">*</span><br />
                      <input type="text" class="my-form-control mt-3" name="ip_address" id="ip_address" required/>
                    </div>
                    <div class="col-6 mt-3">
                      Mật khẩu <span class="text-danger">*</span><br />
                      <input type="text" class="my-form-control mt-3" name="password" id="password" required/>
                    </div>


                    <div class="col-12 mt-3">
                      Dịch vụ sử dụng<span class="text-danger">*</span><br />
                      <select id="services" name="services" class="my-form-control mt-3">
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                    @endforeach
                      </select>
                    </div>

                    <div id="selected-services" class="mt-3">
                        <label>Dịch vụ đã chọn:</label>
                    </div>
            
                    <input type="hidden" name="selectedValue" id="selectedValue" >
                </div>


                    
                    <div class="col-12 mt-3 mb-3">
                      <span class="text-danger">*</span> Là trường thông tin
                      bắt buộc
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 d-flex justify-content-end mt-3">
                <a href="/devices" class="cancel-btn">Hủy bỏ</a>
                </div>
                <div class="col-6 d-flex justify-content-start mt-3">
                <button class="submit-btn" type="submit" >Thêm thiết bị</button>
                </div>
            </div>
               
        </form> 
          </div>
        </div>
      </div>





 
   
@endsection