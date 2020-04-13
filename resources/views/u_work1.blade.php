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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Products Listing</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="/addreturn"> @csrf
                   <div class="table-repsonsive">
                    <span id="error"></span>
                    <table class="table table-striped">
                     <tr>
                       <th>#</th>
                      <th>Group</th>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Unit Price</th>
                      <th>Return</th>
                      <th>Payable Price</th>
                     </tr>
                     <tbody>
                     @foreach($value1 as $val)
                       <tr>
                         <td>{{{$c=$c+1}}}</td>
                         <td><input type="hidden" name="id[]" value="{{$val['id']}}">
                             {{$val['gname']}}</td>
                         <td>{{$val['pname']}}</td>
                         <td>{{$val['quantity']}}</td>
                         <td>{{$val['unit']}}</td>
                         <td><input type="text" name="item1[]" class="form-control item_quantity" value="{{$val['return']}}" /></td>
                         <td>{{(double)$val['price']-((double)$val['return']*(double)$val['unit'])}}</td>
                       </tr>
@endforeach

                     <tr>
                         <table class="table table-striped" id="item_table">
                             <tr>
                                 <th>#</th>
                                 <th>Type</th>
                                 <th>Purpas</th>
                                 <th>Amount</th>
                                 <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="fas fa-plus"></span></button></th>
                             </tr>
                         </table>
                     </tr>
                     </tbody>
                    </table>

                    <div align="left">
                     <button class="btn btn-primary">Update</button>
                    </div>
                   </div>
                    </form>
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
                    <h4>Return Payment</h4>
                  </div>
                    <form method="post" action="/submitpayment">
                        @csrf
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputZip">Payment Date</label>
                        <input type="date" class="form-control" name="date" id="inputZip">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip">Amount</label>
                        <input type="text" class="form-control" name="amount" id="inputZip">
                      </div>
                    </div>
                  </div>



                  <div class="card-footer">
                    <button class="btn btn-primary">Pay</button>
                  </div>
                    </form>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Payment List</h4>

                  </div>
                  <div class="card-body">
                      {{--<div align="center">
                          <h4>Total Payable {{$total}} BDT</h4>
                      </div>
--}}
                      <div>
                          <h6 style="color:black">Income Expenditure List</h6>
                      </div>
                      <div class="table-responsive">
                          <table class="table table-bordered table-md">
                              <tr>
                                  <th>#</th>
                                  <th>Type</th>
                                  <th>Purpose</th>
                                  <th>Amount</th>
                                  <th>Action</th>
                              </tr>

                                  @foreach($value2 as $val1)
                                  <tr>
                                      <td>{{$d=$d+1 }}</td>
                                      <td>{{$val1['type']}}</td>
                                      <td>{{$val1['purpase']}}</td>
                                      <td>{{$val1['amount']}}</td>
                                      <td><a href="/deletein/{{$val1['id']}}" class="btn btn-danger">Delete</a></td>
                                  </tr>
                                      @endforeach




                          </table>
                      </div>
                      <div>
                          <h6 style="color:black">Payment List</h6>
                      </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Date</th>
                          <th>Amount</th>
                          <th>Action</th>
                        </tr>
                          @foreach($value3 as $val)
                        <tr>
                          <td>{{$e=$e+1}}</td>
                          <td>{{$val['date']}}</td>
                          <td>{{$val['amount']}}</td>
                          <td><a href="/deletepay/{{$val['id']}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                          @endforeach

                          <tr>
                              <td>#</td>
                              <td> <b>Total Payable</b> </td>
                              <td> <b> {{$total=$total+$total1}} BDT</b> </td>
                              <td></td>
                          </tr>
                        <tr>
                          <td>#</td>
                          <td> <b>Total Pay</b> </td>
                          <td> <b>{{$total2}}</b> </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>#</td>
                          <td> <b>Due</b> </td>
                          <td> <b>{{$total-$total2}}</b> </td>
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
          <a href="/sheet/{{$_SESSION['new']}}" class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i>Print</a>
        </div>
      </div>

      <script>
$(document).ready(function(){

 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td></td>';
  html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="Income">Income</option> <option value="Expenditure">Expenditure</option></select></td>';
  html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
  html += '<td><input type="text" name="item_[]" class="form-control item_quantity" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fas fa-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });

 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });

 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });

});
</script>
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
