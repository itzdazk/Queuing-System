
@extends('layout.layout')

@section('badge')
<span class="head-badge">Cài đặt</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Quản lý tài khoản</span>
@endsection
@section('content')


<div class="main-panel w-100 row" style="background-color: #f3f3f3">
    <div class="content-wrapper col-12" style="padding-top: 10px">
      <div class="row px-3">
        <div class="col-12 pb-4" style="color: #ff7506">
          <h2>Quản lý tài khoản</h2>
        </div>
        <div class="col-9">
          <h5>Tên dịch vụ</h5>
        </div>
        
        <div class="col-3">
          <h5>Chọn thời gian</h5>
        </div>
        
        <div class="col-9">
            <div class="col-4">
                <select name="active" id="active" class="form-select-device">
                  <option value="">Tất cả</option>
                  <option value="0">Ngưng hoạt động</option>
                  <option value="0">Đang hoạt động</option>
                </select>
              </div>
        </div>
        <div class="col-3">
          <input type="text" class="search-input" placeholder="Nhập từ khóa">
        </div>
      </div>
      <div class="row p-3">
        <div class="col-md-12">
          <table class="styled-table">
            <thead>
              <tr>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Thời gian tác động</th>
                <th scope="col">Ip thực hiện</th>
                <th scope="col">Thao tác thực hiện</th>
            
        
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>tannguyen@gmail.com</td>
                    <td>9/7/2023 05:37</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>kimsat@gmail.com</td>
                    <td>9/7/2023 04:34</td>
                    <td>19.23.43.54</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>xenhle@gmail.com</td>
                    <td>9/7/2023 04:27</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>xenhle@gmail.com</td>
                    <td>9/7/2023 03:17</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>tannguyen@gmail.com</td>
                    <td>9/7/2023 02:31</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>vanthap@gmail.com</td>
                    <td>9/7/2023 02:12</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                
                <tr>
                    <td>tannguyen@gmail.com</td>
                    <td>9/7/2023 12:37</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>vanthap@gmail.com</td>
                    <td>9/7/2023 11:55</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                <tr>
                    <td>tannguyen@gmail.com</td>
                    <td>9/7/2023 8:35</td>
                    <td>19.23.43.23</td>
                    <td>cập nhật thông tin role admin</td>
                
                
                </tr>
                                
            </tbody>
          </table>
        </div>
      </div>
    </div>
   
  </div>

  @endsection