<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lock Hood</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/Assets/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/Assets/quill/quill.snow.css" rel="stylesheet">
  <link href="/Assets/quill/quill.bubble.css" rel="stylesheet">
  <link href="/Assets/remixicon/remixicon.css" rel="stylesheet">
  <link href="/Assets/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{URL::asset('/images/logo1.png')}}" alt="">
        <span class="d-none d-lg-block">Lock Hood</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{URL::asset('/images/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{URL::asset('/images/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{URL::asset('/images/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{URL::asset('/images/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$userLastName}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>{{$userFirstName}} {{$userLastName}}</h6>
                <span>{{$userRole}} ({{$userLevel}})</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <form action="{{ url('/viewdashboard') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-grid"></i>&nbsp;&nbsp;&nbsp;Dashboard
            </button>
        </form>
      </li><!-- End Dashboard Nav -->
      <li><br></li>
      <li class="nav-item">
        <button class="btn btn-navstyle" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-nut"></i></i>
            <span>&nbsp;&nbsp;Engineering</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-chevron-down ms-auto"></i>
        </button>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <button type="submit"  class="btn btn-navstyle">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="bi bi-pen-fill"></i>
                &nbsp;&nbsp;&nbsp;
              <span>Design</span>
            </button>
          </li>
          <li>
            <button type="submit"  class="btn btn-navstyle">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="bi bi-wrench"></i></i></i>
                &nbsp;&nbsp;&nbsp;
              <span>Engineering</span>
            </button>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li><br></li>
      <li class="nav-item">
        <button class="btn btn-navstyle" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-building-gear"></i>
            <span>&nbsp;&nbsp;Management</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-chevron-down ms-auto"></i>
        </button>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
                <form action="{{url('/viewfactory')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="username" value="{{$username}}">
                  <button type="submit"  class="btn btn-navstyle">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-buildings"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Factory</span>
                  </button>
                </form>
              </li>
              <li>
                <form action="{{url('/viewpurchasing')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="username" value="{{$username}}">
                  <button type="submit"  class="btn btn-navstyle">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-cart-plus"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Purchasing</span>
                  </button>
                </form>
              </li>
        </ul>
      </li><!-- End test Nav -->

      <li><br></li>
      <!--<li class="nav-heading">Pages</li>-->

      <li class="nav-item">
        <form action="{{ url('/viewhr') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-person-vcard"></i>&nbsp;&nbsp;&nbsp;Human Resources
            </button>
        </form>
      </li><!-- End hr Nav -->

      <li><br></li>
      <li class="nav-item">
      <form action="{{ url('/viewsalesandmarketing') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-person-vcard"></i>&nbsp;&nbsp;&nbsp;Sales & Marketing
            </button>
        </form>
      </li><!-- End s & m Nav -->
      <li><br></li>
      <li class="nav-item">
        <form action="{{ url('/viewfinance') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-cash-coin"></i>&nbsp;&nbsp;&nbsp;Finance
            </button>
        </form>
      </li><!-- End finance Nav -->
      <li><br></li>
      <li class="nav-item">
        <form action="{{ url('/viewradnd') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-graph-up-arrow"></i>&nbsp;&nbsp;&nbsp;R & D
            </button>
        </form>
      </li><!-- End r & d Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Purchasing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Dashboard</a></li>
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Purchasing</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


          <!--bar chart-->
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Stock Levels</h5>
                <div id="barChart"></div>
         
                    <script>

                    //var array1 = $productsPrices;
                    //var array2 = $productsIds;
                    
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                            name: "Quantity",
                            data: [1,2,3,4,5,6,7,8,9,9,1,2,3]
                        }],
                        chart: {
                            type: 'bar',
                            height: 268
                        },
                        plotOptions: {
                            bar: {
                            borderRadius: 4,
                            horizontal: false,
                            }
                        },
                        dataLabels: {
                            enabled: true
                        },
                        xaxis: {
                            type:"Product Id",
                            categories: [1,2,3,4,5,6,7,8,9,9,1,2,3],
                        }
                        }).render();
                    });
                    </script>

                </div>
              </div>
          </div><!--End bar chart-->

          <div class="col-lg-4">
            <!-- Supplier Payment -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">Supplier Payments <span>| Month</span></h5>

                    <div id="trafficChart" style="min-height: 300px;" class="echart"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        echarts.init(document.querySelector("#trafficChart")).setOption({
                            tooltip: {
                            trigger: 'item'
                            },
                            legend: {
                            top: '5%',
                            left: 'center'
                            },
                            series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: ['40%', '70%'],
                            avoidLabelOverlap: false,
                            label: {
                                show: false,
                                position: 'center'
                            },
                            emphasis: {
                                label: {
                                show: true,
                                fontSize: '18',
                                fontWeight: 'bold'
                                }
                            },
                            labelLine: {
                                show: false
                            },
                            data: [{
                                value: 1248,
                                name: 'Completed'
                                },
                                {
                                value: 535,
                                name: 'Part'
                                },
                                {
                                value: 300,
                                name: 'Not-pay'
                                }
                            ]
                            }]
                        });
                        });
                    </script>
                </div>
            </div>
            <!-- End Supplier Paymen -->
        </div>

      </div>
      <div class="row">
        <!-- Suppliers -->
        <div class="col-lg-12 md-12">
            <div class="card top-selling overflow-auto">
              <div class="card-body pb-0">
                <h5 class="card-title">Suppliers<span> | By  </span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Spplier Name</th>
                      <th scope="col">Material Type</th>
                      <th scope="col">Quantity(Kg)</th>
                      <th scope="col">Price($)</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                  </tbody>
                </table>

              </div>

            </div>
        </div>
          <!-- End Suppliers -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>E-Apartments</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Assets/apexcharts/apexcharts.min.js"></script>
  <script src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/chart.js/chart.umd.js"></script>
  <script src="Assets/echarts/echarts.min.js"></script>
  <script src="Assets/quill/quill.min.js"></script>
  <script src="Assets/simple-datatables/simple-datatables.js"></script>
  <script src="Assets/tinymce/tinymce.min.js"></script>
  <script src="Assets/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>