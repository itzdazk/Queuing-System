{{-- 

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required autofocus>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    @if (session('error'))
    <div>{{ session('error') }}</div>
@endif
    <div>
        <button type="submit">Đăng nhập</button>
    </div>
    <a href=" /verify-email ">Quen mat khau</a>
</form> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <title>Trang Đăng nhập</title>
  </head>
  <style>
    body {
      height: 100vh;
      background-color: rgb(219, 223, 223);
    }
    .img-group {
      position: relative;
    }
    .bg-o {
      color: #ff9138;
      position: absolute;
      bottom: 40%;
      left: 50%;
    }
    .btn-login {
      background-color: #ff9138;
      color: white;
      padding: 5px 30px;
    }
    .logo-alta {
      position: absolute;
      width: 150px;
      top: -40%;
      right: 35%;
    }
  </style>

  <body>
    <div class="container-fluid h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-4">
          <img src="{{ asset('assets/images/logo/Logo alta.png') }}" class="logo-alta" alt="" />
          <div class="login-parent p-5">
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                @if (session('error'))
                    <div class="text-danger">{{ session('error') }}</div>
                @endif
              <div class="form-group">
                <label for="username">Tên đăng nhập *</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  placeholder="Nhập tên đăng nhập"
                  type="text" name="username" id="username" required autofocus
                />
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu *</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Nhập mật khẩu"
                  required
                />
              </div>
              <div class="form-group">
                <a class="text-danger" href="/verify-email">Quên mật khẩu *</a>
              </div>
              <div class="btn-center d-flex justify-content-center">
                <button type="submit" class="btn btn-login">Đăng nhập</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-8 bg-white h-100">
          <img
            src="{{ asset('assets/images/logo/Group 341.png') }}"
            class="img-fluid img-group"
            alt="Hình ảnh"
          />
          <span class="bg-o">
            <h4>Hệ thống</h4>
            <h2>QUẢN LÝ XẾP HÀNG</h2>
          </span>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
