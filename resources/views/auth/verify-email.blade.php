
{{-- 
<form method="POST" action="{{ route('verify-email.post') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required autofocus>
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
      top: -60%;
      right: 35%;
    }
  </style>

  <body>
    <div class="container-fluid h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-4">
          <img src="{{ asset('assets/images/logo/Logo alta.png')}}" class="logo-alta" alt="" />
          <div class="login-parent p-5">
            <h5 class="text-center">Đặt lại mật khẩu</h5>
            <form method="POST" action="{{ route('verify-email.post') }}">
                @csrf
            
              <div class="form-group">
                <label for="email"
                  >Vui lòng nhập email để đặt lại mât khẩu</label
                >
                <input
                  type="text"
                  class="form-control"
                  type="email" name="email" id="email" required autofocus
                  placeholder="Nhập tên đăng nhập"
                />
              </div>
            @if (session('error'))
                <div class="text-danger">{{ session('error') }}</div>
            @endif

              <div class="btn-center d-flex justify-content-center">
                <button type="submit" class="btn btn-login">Tiếp tục</button>
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
