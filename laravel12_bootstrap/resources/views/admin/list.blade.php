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
      <a class="p-2 fs-5 link-menu" href="{{ route('admin.login') }}">Đăng Xuất</a>
  </div>
  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
  <!-- main -->
  <section class="main">
      <div class="container">
          <h3 class="text-center mt-3 mb-3">Danh sách user</h3>
          <table class="table table-hover table-bordered border-black">
              <thead>
              <tr class="fw-bold text-center">
                  <th scope="col">ID</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">age</th>
                  <th scope="col">Thao tác</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($users as $user)
              <tr>
                  <th>{{$user -> id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->age}}</td>
                  <td>
                      <a href="{{ route('admin.update', $user->id)}}">Edit</a> |
                      <a href="{{ route('admin.view', $user->id)}}">View</a> |
                      <a href="#">Delete</a>
                  </td>
              </tr>
                  @endforeach
              </tbody>
          </table>

          <!-- ladding page -->
          <div
              class="list-group list-group-horizontal justify-content-center mt-4"
          >
              <button class="list-group-item btn btn-outline-primary">Pre</button>
              <button class="list-group-item btn btn-outline-primary">1</button
              ><button class="list-group-item btn btn-outline-primary">2</button
              ><button class="list-group-item btn btn-outline-primary">3</button
              ><button class="list-group-item btn btn-outline-primary">Next</button>
          </div>
      </div>
  </section>

  <!-- footer -->
  <div
      class="container-fluid border border-black border-2 text-center mt-5 p-2"
  >
      <span class="fw-medium">Lập trình backend-2 @3/24/2025</span>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
