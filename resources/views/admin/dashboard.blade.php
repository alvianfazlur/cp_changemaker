<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
    use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../admin_assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/images/logo.png">
  <title>
    Changemaker Admin
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../admin_assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../admin_assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../admin_assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/home" target="_blank">
        <img src="../assets/images/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Changemaker Admin</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/recruitments">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Recruitments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/blogs">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Blogs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/admin/events">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Events</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/admin/partnerships">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Partnerships</span>
        </a>
    </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/admin/teams">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Teams</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white" href="/admin/testimonial">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Testimonial</span>
        </a>
    </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="/logout" id="signOutButton">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">logout</i>
              </div>
              <span class="nav-link-text ms-1">Sign Out</span>
          </a>
      </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl">
                  <img src="../admin_assets/img/illustrations/pattern-tree.svg" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                  <span class="mask bg-gradient-dark opacity-10"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="material-icons text-white p-2">wifi</i>
                    <h5 class="text-white mt-4 mb-5 pb-2">Welcome&nbsp;&nbsp;Admin&nbsp;&nbsp;&nbsp;</h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                          <h6 class="text-white mb-0">{{ Auth::user()->name }}</h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="../assets/images/logo.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
                <div class="col-md-6 col-6">
                  <a href="/">
                    <div class="card">
                      <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                          <i class="material-icons opacity-10">account_balance</i>
                        </div>
                      </div>
                      <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Homepage</h6>
                        <span class="text-xs">Navigate to Website</span>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-6 col-6">
                  <a href="/admin/profile">
                    <div class="card">
                      <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                          <i class="material-icons opacity-10">account_balance</i>
                        </div>
                      </div>
                      <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">Profile</h6>
                        <span class="text-xs">Detail Profile</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                      <a href="/admin/recruitments">
                        <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                          <img class="w-10 me-3 mb-0" src="../assets/images/logo.png" alt="logo">
                          <h6 class="mb-0">Recruitments</h6>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-4">
                      <a href="/admin/gallery">
                        <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                          <img class="w-10 me-3 mb-0" src="../assets/images/logo.png" alt="logo">
                          <h6 class="mb-0">Gallery</h6>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Blogs</h6>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                @foreach ($blogs as $b)  
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">{{$b->title}}</h6>
                   <span class="mb-2 text-xs">Author: <span class="text-dark ms-sm-2 font-weight-bold">{{$b->author}}</span></span>
                    </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-dark px-3 mb-0" href="/admin/update-blog/{{$b->id}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-6 text-end">
              <a href="/admin/blogs">
                <button class="btn btn-sm mb-0">view all</button>
              </a>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Events</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                @foreach ($events as $e)
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">{{$e->event_name}}</h6>
                    <span class="mb-2 text-xs">Event Date: <span class="text-dark font-weight-bold ms-sm-2">{{Carbon::parse($e->event_date)->format('d F Y')}}</span></span>
                    <span class="mb-2 text-xs">Location: <span class="text-dark ms-sm-2 font-weight-bold">{{ substr($e->location, 0, 100) }}</span></span>
                    @php
                        $description = strlen($e->description) > 100 ? substr($e->description, 0, 100) . ' ...' : $e->description
                    @endphp
                    <span class="mb-2 text-xs">Description: <span class="text-dark ms-sm-2 font-weight-bold">{!! $description !!}</span></span>
                  </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:void(0);" onclick="confirmDelete({{$e->id}})">
                      <i class="material-icons text-sm me-2">delete</i>Delete
                  </a>
                    <a class="btn btn-link text-dark px-3 mb-0" href="/admin/edit-events/{{$e->id}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-6 text-end">
              <a href="/admin/events">
                <button class="btn btn-sm mb-0">view all</button>
              </a>
            </div>
            <br>
          </div>
        </div>
        <div class="col-md-5 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Our Partners</h6>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                @foreach ($partnerships as $p)   
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex flex-row align-items-center">
                    <img src="{{$p->image}}" alt="" style="max-width: 100px; max-height: 100%;">
                    <div class="d-flex flex-column ms-3">
                        <h6 class="text-dark mb-1 font-weight-bold text-sm">{{$p->name}}</h6>
                        <span class="text-xs">{{$p->type}}</span>
                    </div>
                </div>                
                  <div class="d-flex align-items-center text-sm">
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1"></i> Details</button>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-6 text-end">
              <a href="/admin/partnerships">

                <button class="btn btn-sm mb-0">view all</button>
              </a>
            </div>
            <br>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://punggawastudio.com/" class="font-weight-bold" target="_blank">Punggawa</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../admin_assets/js/core/popper.min.js"></script>
  <script src="../admin_assets/js/core/bootstrap.min.js"></script>
  <script src="../admin_assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../admin_assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../admin_assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script>
    function confirmDelete(id) {
        var result = confirm("Are you sure you want to delete this event?");
        if (result) {
            window.location.href = "/admin/delete-event/" + id;
        }
    }
</script>
</body>

</html>