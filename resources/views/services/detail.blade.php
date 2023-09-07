

@extends('layout.layout')

@section('badge')
            <span class="head-badge">Dịch vụ</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Danh sách dịch vụ</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Chi tiết</span>
@endsection
@section('content')

<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-11" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý dịch vụ</h2>
        </div>
      </div>
      <div class="row p-3">
        <div class="col-md-4 bg-white card-boder">
          <div class="card-body">
            <h4 class="bg-o">Thông tin dịch vụ</h4>

            <div class="row">
              <div class="col-12 mt-3 ps-0">
                <div class="col-12">
                  Mã dịch vụ : <span class="bg-g">{{ $service->service_code }}</span>
                </div>
                <div class="col-12 mt-3">
                  Tên dịch vụ : <span class="bg-g">{{ $service->service_name }}</span>
                </div>
                <div class="col-12 mt-3">
                  Mô tả : <span class="bg-g">{{ $service->description }}</span>
                </div>
              </div>

              <div class="col-12 mt-3">
                <h4 class="bg-o">Quy tắc cấp số</h4>
                <div class="col-12 mt-3">
                  Tăng tự đọng từ :
                  <input type="text" class="small-input-text"value="001"/> đến
                  <input type="text" class="small-input-text" value="999"/>
                </div>
                <div class="col-12 mt-3">
                  Prefix :
                  <input type="text" class="small-input-text"value="1" />
                </div>
                <div class="col-12 mt-3">
                  Surfix :
                  <input type="text" class="small-input-text"value="1" />
                </div>
                <div class="col-12 mt-3">Reset mỗi ngày</div>
              </div>

              <div class="col-12 mt-3 mb-3">
                <span class="text-danger">*</span> Là trường thông tin bắt
                buộc
              </div>
            </div>
          </div>
        </div>
        <div class="col-8 row bg-white">
          <div class="col-3 mt-3">Trạng thái</div>
          <div class="col-6 mt-3">Thời gian</div>
          <div class="col-3 mt-3">Từ khóa</div>
          <div class="col-3">
            <select class="w-100 form-filter-service">
              <option value="">Tất cả</option>
            </select>
          </div>
          <div class="col-3">
            <input type="date" class="w-100 form-filter-service" />
          </div>
          <div class="col-3">
            <input type="date" class="w-100 form-filter-service" />
          </div>
          <div class="col-3">
            <input type="text" class="w-100 form-filter-service" />
          </div>
          <table class="styled-table mt-3">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Trang thai</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($regisnumbers as $regisnumber)
                <tr>
                    <td>{{ $regisnumber->order_number }}</td>
                    <td>{{ $regisnumber->status }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-1 h-100" style="padding-top: 145px">
      <button class="add-new-btn">
        <a href="index.html" class="text-decoration-none">
          <img src="images/logo/add-square.png" alt="" />
          <span style="color: #ff7506">Cập nhật danh sách</span>
        </a>
      </button>
    </div>
  </div>

  @endsection

