
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Queuing System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />

    <style>
       .nav-logo {
        margin-right: 10px;
      }
      .styled-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
        border-radius: 8px;
      }

      .styled-table th,
      .styled-table td {
        padding: 8px;
        border: 1px solid #ddd;
      }

      .styled-table th {
        background-color: #ff9138;
        color: #fff;
      }

      .styled-table tbody tr:nth-child(even) {
        background-color: #fff2e7;
      }

      .styled-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
      }

      .styled-table tbody tr:hover {
        background-color: #ddd;
      }

      .nav-item:hover {
        background-color: #fff2e7;
      }

      .nav-active {
        background-color: #ff7506;
      }

      .form-select-device {
        width: 260px;
        height: 40px;
        border-radius: 8px;
        border: 1px solid gainsboro;
        color: rgb(130, 126, 126);
      }

      .search-input {
        width: 240px;
        height: 40px;
        border: 1px solid gainsboro;
        border-radius: 8px;
      }

      .add-new-btn {
        border: none;
        background-color: #fff2e7;
        color: #ff7506;
        font-size: 15px;
        text-decoration: none;
      }
      .add-new-btn .a {
        color: #ff7506;
      }
      .head-badge {
        color: #7e7d88;
        font-size: 20px;
      }
      .middle-badge {
        color: #ff7506;
        font-size: 20px;
        font-weight: bold;
      }
      .bg-o {
        color: #ff7506;
      }

      .bg-g {
        color: #7d7777;
      }

      .add-padding {
        padding-bottom: 250px;
      }

      .my-form-control {
        width: 100%;
        height: 40px;
        border: 1px solid gainsboro;
        border-radius: 8px;
      }

      .my-textarea {
        border: 1px solid gainsboro;
        border-radius: 8px;
      }

      .small-input-text {
        width: 50px;
        height: 40px;
        border: 1px solid gainsboro;
        border-radius: 8px;
      }

      .card-boder {
        border-radius: 8px;
      }

      .cancel-btn {
        padding: 8px 28px;
        background-color: #fff2e7;
        color: #ff9138;
        border: 2px solid #ff7506;
        border-radius: 8px;
      }
      .submit-btn {
        background-color: #ff9138;
        color: white;
        border-radius: 8px;
        border: 2px solid #ff9138;
      }
      .color-parent {
        background-color: #fff2e7;
        padding: 10px;
      }
      .btn-logout{
        border:none;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav
        class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row justify-content-between"
        style="background-color: #f3f3f3"
      >
        <div
          class="navbar-brand-wrapper d-flex justify-content-center"
          style="width: 200px; border: 0"
        >
          <img
            src="{{ asset('assets/images/logo/Logo alta.png')}}"
            alt=""
            style="position: absolute; top: 40%; left: 4%"
          />
        </div>
        <div class="myBadge col-7 p-0">
            @yield('badge')
          {{-- <span class="head-badge">Thiết bị</span>
          <span><img src="{{ asset('assets/images/logo/u_angle-right.png')}}" alt="" /></span>
          <span class="middle-badge">Danh sách thiết bị</span> --}}
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
          style="width: auto; background-color: #f3f3f3; border: 0"
        >
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown mr-4">
              <a
                class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                id="notificationDropdown"
                href="#"
                data-toggle="dropdown"
              >
                <img src="{{ asset('assets/images/logo/larm-icon.png')}}" alt="" />
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
                id="profileDropdown"
                aria-expanded="false"
              >
                <span class="nav-profile-name">{{ $full_name }}</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item" href="/user-info">
                  <i class="mdi mdi-settings text-primary"></i>
                  Thông tin người dùng
                </a>
               
                <a class="dropdown-item" >
                  <i class="mdi mdi-logout text-primary"></i>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn-logout" type="submit">Đăng xuất</button>
                </form>
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav
          class="sidebar sidebar-offcanvas"
          id="sidebar"
          style="width: 200px; padding-top: 70px"
        >
          <ul class="nav">
            <li class="nav-item">
              <a
                class="nav-link "
                href="/dashboard"
              >
                <img src="{{ asset('assets/images/logo/dashboard.png')}}" alt="" class="nav-logo" />
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/devices">
                <img
                  src="{{ asset('assets/images/logo/device.png')}}"
                  alt=""
                  class="nav-logo img-fluid"
                />
                <span class="menu-title">Thiết bị</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">
                <img src="{{ asset('assets/images/logo/service.png')}}" alt="" class="nav-logo" />
                <span class="menu-title">Dịch vụ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/regisnumber">
                <img src="{{ asset('assets/images/logo/regisnum.png')}}" alt="" class="nav-logo" />
                <span class="menu-title">Cấp số</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/report">
                <img src="{{ asset('assets/images/logo/report.png')}}" alt="" class="nav-logo" />
                <span class="menu-title">Báo cáo</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="/setting">
                <img src="{{ asset('assets/images/logo/setting.png')}}" alt="" class="nav-logo" />
                <span class="menu-title">Cài đặt hệ thống</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link collapsed" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <img src="{{ asset('assets/images/logo/setting.png')}}" alt="" class="nav-logo" />
                <span class="menu-title">Cài đặt hệ thống</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth" style="">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/roles"> Quản lý vai trò </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/users"> Quản lý tài khoản </a></li>
                  <li class="nav-item"> <a class="nav-link" href="/users-log"> Nhật ký người dùng </a></li>
                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        @yield('content')


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('assets/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('assets/js/data-table.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->
    <!-- Code injected by live-server -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        var selectedValue="";
            $(document).ready(function() {
                $('#services').select2();
    
                $('#services').on('change', function() {
                    var serviceName = $('#services option:selected').text();
                    var selectedServices = $('#selected-services');
                    selectedServices.append('<p>' + serviceName + ' <a href="#" class="remove-service">Remove</a></p>');
                    var currentValue = $('#selectedValue').val();
                    selectedValue = currentValue+","+ serviceName;
                    $('#selectedValue').val(selectedValue);
                    console.log(selectedValue);
                });
    
    
                $(document).on('click', '.remove-service', function() {
                    var parentText = $(this).parent().text().replace(" Remove","");
                    selectedValue = selectedValue.replace(","+parentText, "");
                    $('#selectedValue').val(selectedValue);
                    console.log(selectedValue);
                    $(this).parent().remove();
                });
            });
    
    
    
        </script>
    
  </body>
</html>
