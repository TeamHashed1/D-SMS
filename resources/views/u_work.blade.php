<!DOCTYPE html>
<html lang="en">


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Atlas Software Park</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
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
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Return Products</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputState">Select Group</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                            @foreach($name as $na)
                                <option value="{{$na['name']}}">{{$na['name']}}</option>
                                @endforeach

                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Products Name</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Quantity</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Listed</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Extra Income Or Expenses</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputState">Select Type</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option value="Income">Income</option>
                          <option value="Expenses">Expenses</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">Purpas</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Amount</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Add</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Return Products</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Group</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>Jelli</td>
                          <td>2</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Hasan Basri</td>
                          <td>Jelli</td>
                          <td>3</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kusnadi</td>
                          <td>Jelli</td>
                          <td>4</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Rizal Fakhri</td>
                          <td>Jelli</td>
                          <td>3</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
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
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Income Or Expenses</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Type</th>
                          <th>Purpas</th>
                          <th>Amount</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Income</td>
                          <td>Sell</td>
                          <td>100</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Expenses</td>
                          <td>Tyer</td>
                          <td>200</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Expenses</td>
                          <td>Tyer</td>
                          <td>200</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Income</td>
                          <td>Sell</td>
                          <td>100</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
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
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Return Products</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputZip">Payment Date</label>
                        <input type="date" class="form-control" id="inputZip">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip">Amount</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Pay</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Payment List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Amount</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>02/02/2020</td>
                          <td>8000</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>02/02/2020</td>
                          <td>8000</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>02/02/2020</td>
                          <td>8000</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>02/02/2020</td>
                          <td>8000</td>
                          <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td> <b>Total Pay</b> </td>
                          <td> <b>32000</b> </td>
                          <td></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr>
        <div class="text-md-right">
          <a href="sheet.blade.php" class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i>Print</a>
        </div>
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
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
</html>
