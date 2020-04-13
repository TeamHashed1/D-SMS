<!DOCTYPE html>
<html lang="en">


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Atlas Software Park</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../{{'assets'}}/css/app.min.css">
  <link rel="stylesheet" href="../{{'assets'}}/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="../{{'assets'}}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../{{'assets'}}/css/style.css">
  <link rel="stylesheet" href="../{{'assets'}}/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../{{'assets'}}/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../{{'assets'}}/img/favicon.ico' />
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
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="../{{'assets'}}/img/user.png"
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
          <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                  <a href="/"> <img alt="image" src="../{{'assets'}}/img/logo.png" class="header-logo" /> <span
                          class="logo-name">ASP</span>
                  </a>
              </div>
              <ul class="sidebar-menu">
                  <li class="menu-header">Main Menu</li>
                  <li class="dropdown">
                      <a href="/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Daily Work</span></a>
                      <ul class="dropdown-menu">
                          <li><a class="nav-link" href="/dailyWork">Order</a></li>
                          <li><a class="nav-link" href="/return">Return</a></li>
                      </ul>
                  </li>
                  <li><a class="nav-link" href="/all"><i data-feather="file-text"></i><span>All Record</span></a></li>
                  <li><a class="nav-link" href="/dsr"><i data-feather="user-plus"></i><span>DSR</span></a></li>
                  <li><a class="nav-link" href="/group"><i data-feather="award"></i><span>Group Add</span></a></li>
                  <li><a class="nav-link" href="/product"><i data-feather="plus-square"></i><span>Add Product</span></a></li>
                  <li class="menu-header">Additional</li>
                  <li><a class="nav-link" href="/cp"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a class="nav-link" href="/logout"><i data-feather="log-out"></i><span>Log Out</span></a></li>
              </ul>
          </aside>

      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print" id="printableArea">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>DSR Details</strong><br>
                           {{ $value->name}}<br>
                          {{$value->phone}} <br>
                          {{$value->route}}<br>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Bill Date:</strong><br>
                          {{$value->date}}<br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">All items here cannot be deleted.</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th data-width="40">#</th>
                          <th>Group</th>
                          <th>Products</th>
                          <th class="text-center">Order</th>
                          <th class="text-center">Return</th>
                          <th class="text-center">Sell</th>
                          <th class="text-center">Unit Price</th>
                          <th class="text-right">Totals</th>
                        </tr>

                          @foreach($value1 as $val)
                              <tr>
                              <td>{{$c=$c+1}}</td>
                              <td>{{$val['gname']}}</td>
                              <td>{{$val['pname']}}</td>
                              <td class="text-center">{{$val['quantity']}}</td>
                              <td class="text-center">{{$val['returnam']}}</td>
                              <td class="text-center">{{(double)$val['quantity1']- (double)$val['return']}}</td>
                              <td class="text-center">{{$val['unit']}}</td>
                              <td class="text-right">{{(double)$val['price']- ((double)$val['return']*$val['unit'])}}</td>
                              </tr>
                              @endforeach

                        <tfoot>
                          <th></th>
                          <th>Total</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th class="text-right">{{$total}}</th>
                        </tfoot>
                      </table>
                    </div>
                    <div class="section-title">Others</div>
                    <p class="section-lead">Extra Or Expenditure</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th>#</th>
                         <th>Type</th>
                         <th>Purpas</th>
                         <th>Amount</th>
                        </tr>
                          @foreach($value2 as $val)
                        <tr>
                          <td>{{$d=$d+1}}</td>
                          <td>{{$val['type']}}</td>
                          <td>{{$val['purpase']}}</td>
                          <td>{{$val['amount']}}</td>
                        </tr>
                          @endforeach

                        <tfoot>
                          <th>#</th>
                          <th>Total</th>
                          <th></th>
                          <th>{{$total1}}</th>
                        </tfoot>
                      </table>
                    </div>
                    <div class="row mt-4">
                      <div class="col-lg-8"></div>
                      <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Total Payable</div>
                          <div class="invoice-detail-value">{{$total = $total+$total1}}</div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Payment</div>
                          <div class="invoice-detail-value invoice-detail-value-lg">{{$total2}}</div>
                        </div>
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Due</div>
                          <div class="invoice-detail-value invoice-detail-value-lg">{{$total- $total2}}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-md-right">
                <button class="btn btn-warning btn-icon icon-left" onclick="printDiv('printableArea')"><i class="fas fa-print"></i> Print</button>
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






  <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
  </script>


  <!-- General JS Scripts -->
  <script src="../{{"assets"}}/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../{{"assets"}}/bundles/datatables/datatables.min.js"></script>
  <script src="../{{"assets"}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../{{"assets"}}/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../{{"assets"}}/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="../{{"assets"}}/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../{{"assets"}}/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
</html>
