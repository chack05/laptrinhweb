<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">



    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/starter-template/starter-template.css" rel="stylesheet">
  </head>
  <body>
  <!-- header -->
  <div
      class="header-menu d-flex text-black justify-content-center p-2 m-2 border border-black border-2"
  >
      <a class="p-2 fs-5 link-menu" href="#">Home</a>
      <hr />
      <a class="p-2 fs-5 link-menu" href="{{ route('admin.login') }}">Đăng Nhập</a>
      <hr />
      <a class="p-2 fs-5 link-menu" href="{{ route('admin.register') }}">Đăng Ký</a>
  </div>

  <!-- main -->
  <section class="container-fluid main mt-5">
      <div class="border border-black border-1 p-4">
          <h1 class="text-center p-3 m-3">Màn hình cập nhật</h1>
          <form action="{{ route('admin.check_update', $user->id) }}" method="POST">
              @csrf
              @method('POST') <!-- Thêm phương thức POST -->

              <!-- name -->
              <div class="form-group p-4">
                  <label class="fs-6" for="name">Username:</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" />
              </div>

              <!-- Password -->
              <div class="form-group pb-4 ps-4 pe-4">
                  <label class="fs-6" for="password">Mật khẩu:</label>
                  <input type="password" class="form-control" id="password" name="password" />
              </div>

              <!-- Confirm Password -->
              <div class="form-group pb-4 ps-4 pe-4">
                  <label class="fs-6" for="password_confirmation">Nhập lại mật khẩu:</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
              </div>

              <!-- Email -->
              <div class="form-group pb-4 ps-4 pe-4">
                  <label class="fs-6" for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" />
              </div>
              <!-- age -->
              <div class="form-group pb-4 ps-4 pe-4">
                  <label class="fs-6">age:</label>
                  <input type="text" class="form-control" id="age" name="age" value="{{ old('age', $user->age) }}" />
              </div>

              <!-- Button -->
              <div class="text-center mt-3 mb-3">
                  <a href="{{ route('admin.list') }}" class="me-4 text-decoration-none">Danh sách người dùng</a>
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
              </div>
          </form>
      </div>
  </section>

  <!-- footer -->
  <div
      class="container-fluid border border-secondary border-2 text-center mt-5 p-2"
  >
      <span class="fw-medium">Lập trình backend-2 @3/24/2025</span>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
