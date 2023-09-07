{{-- <!-- roles/create.blade.php -->
<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="des">Description:</label>
        <textarea name="des" id="des"></textarea>
    </div>
    <button type="submit">Create</button>
</form> --}}


@extends('layout.layout')

@section('badge')
<span class="head-badge">Cài đặt hệ thống</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="head-badge">Quản lý vai trò</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Thêm vai trò</span>
@endsection
@section('content')
<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
        <form action="{{ route('roles.store') }}" method="POST">
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
                <div class="col-6 mt-3 ps-0">
                  <div class="col-12">
                    Tên vai trò <span class="text-danger">*</span><br />
                    <input type="text" name="name" id="name" class="my-form-control mt-3" />
                  </div>
                  <div class="col-12">
                    Mô tả <span class="text-danger">*</span><br />
                    <textarea
                    name="des" id="des"
                      cols="58"
                      rows="8"
                      class="my-textarea mt-3"
                    ></textarea>
                  </div>
                </div>

                <div class="col-6 mt-3">
                  <span>Phân quyền chức năng</span>
                  <div class="color-parent">
                    <h4 class="bg-o mt-3">Nhóm chức năng A</h4>
                    <div class="col-12">
                      <div class="col-12 mt-3">
                        <input type="checkbox" /> Chức năng a
                      </div>
                      <div class="col-12 mt-3">
                        <input type="checkbox" /> Chức năng b
                      </div>
                      <div class="col-12 mt-3">
                        <input type="checkbox" /> Chức năng c
                      </div>
                    </div>
                    <h4 class="bg-o mt-3">Nhóm chức năng B</h4>
                    <div class="col-12 mt-3">
                      <div class="col-12 mt-3">
                        <input type="checkbox" /> Chức năng x
                      </div>
                      <div class="col-12 mt-3">
                        <input type="checkbox" /> Chức năng y
                      </div>
                      <div class="col-12 mt-3">
                        <input type="checkbox" /> Chức năng z
                      </div>
                    </div>
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
          <a href="/roles" class="cancel-btn">Hủy bỏ</a>
        </div>
        <div class="col-6 d-flex justify-content-start mt-3">
          <button class="submit-btn" type="submit">Thêm vai trò</button>
        </div>
      </div>
    </form>
    </div>
  </div>

  @endsection