<!DOCTYPE html>
<html lang="en">


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Atlas Software Park</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{'assets'}}/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{'assets'}}/css/style.css">
  <link rel="stylesheet" href="{{'assets'}}/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{'assets'}}/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='{{"assets"}}/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
          @include('nav')
      </div>
      <!-- Main Content -->
      <div class="main-content">
          @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
              </div>
          @endif
        <section class="section">
          <div class="section-body">
            <div class="row">




              <div class="col-12 col-md-6 col-lg-6">
                  <form action="/submitgroupname" method="post">
                      @csrf
                <div class="card">

                  <div class="card-header">
                    <h4>Add Products Group</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Group Name</label>
                      <input type="text" placeholder="write here..." name="gname" class="form-control">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </div>
                </div>
                  </form>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Full Width</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>#</th>
                          <th>Group Name</th>
                          <th>Action</th>
                        </tr>
                          @foreach($groupname as $group)
                        <tr>
                          <td>{{$c=$c+1}}</td>
                          <td>{{$group['name']}}</td>
                          <td><a href="/delete/{{$group['id']}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                          @endforeach
                       {{-- <tr>
                          <td>2</td>
                          <td>Sojeeb</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Radhuni</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Akiz</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Coca-Cola</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>--}}
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="https://www.atlassoftwarepark.com/">Atlas Software Park</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{'assets'}}/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{'assets'}}/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{'assets'}}/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
</html>
