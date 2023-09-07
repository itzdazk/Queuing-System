{{-- 

<form method="POST" action="{{ route('reset-password.post') }}">
    @csrf

    <input type="text" name="userId" id="userId" value="{{ $userId }}" hidden>

    <div>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" required autofocus>
    </div>
    <div>
        <label for="cf-password">Nhập lại mật khẩu</label>
        <input type="password" name="cf-password" id="cf-password" required autofocus>
    </div>

    @if (session('error'))
    <div>{{ session('error') }}</div>
@endif
    <div>
        <button type="submit">Xác nhận</button>
    </div>
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
          <img src="{{ asset('assets/images/logo/Logo alta.png')}}" class="logo-alta" alt="" />
          <div class="login-parent p-5">
            <form method="POST" action="{{ route('reset-password.post') }}">
                @csrf

                <input type="text" name="userId" id="userId" value="{{ $userId }}" hidden>

              <div class="form-group">
                <label for="username">Mật khẩu mới *</label>
                <input
                  type="password"
                  class="form-control"
                  name="password" id="password" required autofocus
                  placeholder="Nhập tên đăng nhập"
                />
              </div>
              <div class="form-group">
                <label for="cf-password">Nhập lại mật khẩu *</label>
                <input
                  type="password"
                  class="form-control"
                  name="cf-password" id="cf-password" required autofocus
                  placeholder="Nhập mật khẩu"
                />
              </div>

              <div class="btn-center d-flex justify-content-center">
                <button type="submit" class="btn btn-login">Xác nhận</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-8 bg-white h-100">
          <img
            src="{{ asset('assets/images/logo/Frame.png')}}"
            class="img-fluid img-group"
            alt="Hình ảnh"
          />
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
