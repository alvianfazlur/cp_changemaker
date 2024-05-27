<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="wpOceans">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <title>Changemaker Admin</title>
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">
        <link href="../../assets/css/flaticon.css" rel="stylesheet">
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/animate.css" rel="stylesheet">
        <link href="../../assets/css/owl.carousel.css" rel="stylesheet">
        <link href="../../assets/css/owl.theme.css" rel="stylesheet">
        <link href="../../assets/css/slick.css" rel="stylesheet">
        <link href="../../assets/css/slick-theme.css" rel="stylesheet">
        <link href="../../assets/css/swiper.min.css" rel="stylesheet">
        <link href="../../assets/css/owl.transitions.css" rel="stylesheet">
        <link href="../../assets/css/jquery.fancybox.css" rel="stylesheet">
        <link href="../../assets/css/odometer-theme-default.css" rel="stylesheet">
        <link href="../../assets/css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="../admin_assets/img/apple-icon.png">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <title>Document</title>
    
</head>
<body class="g-sidenav-show bg-gray-200">
  
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../assets/images/logo.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">Changemaker Admin</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="/home">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/admin/recruitments">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Recruitments</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="/admin/blogs">
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
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Profile</h6>
          </nav>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <!-- wpo-event-area start -->
    <div class="wpo-donation-page-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 bg-white">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                    <div class="wpo-donate-header">
                      <br>
                        <h2>Edit Company Profile</h2>
                    </div>
                    <form action="/admin/updateDataProfile" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $profile->id }}"> <br/>
                        
                        <div class="wpo-donations-amount">
                            <h2>Title</h2>
                            <input type="text" class="form-control" name="title" value="{{ $profile->title }}" id="title" required>                          
                            
                            <h2>Subtitle</h2>
                            <input type="text" class="form-control" name="subtitle" value="{{ $profile->subtitle }}" id="subtitle" required>
                            
                            <h2>Vision</h2>
                            <div>
                              <textarea class="form-control" name="vision" id="vision-textarea" required>{{ $profile->vision }}</textarea>
                            </div>
                            <br>

                            <h2>Mission</h2>
                            <div>
                              <textarea class="form-control" name="mission" id="mission-textarea" required>{{ $profile->mission }}</textarea>
                            </div>

                            <br>
                            <h2>About Us</h2>
                            <div>
                              <textarea class="form-control" name="description" id="about-textarea" required>{{ $profile->description }}</textarea>
                            </div>
                            <br>
                            <h2>Whatsapp Number (628....)</h2>
                            <input type="text" class="form-control" placeholder="628" name="whatsapp" value="{{ $profile->whatsapp }}" id="subtitle" required>
                            
                            <h2>Link Instagram</h2>
                            <input type="text" class="form-control" placeholder="https://www.instagram.com/changemaker.ind/" name="instagram" value="{{ $profile->instagram }}" id="subtitle" required>
                            
                            <h2>Address</h2>
                            <input type="text" class="form-control" name="address" value="{{ $profile->address }}" id="subtitle" required>
                            
                            <h2>Email</h2>
                            <input type="text" placeholder="punggawa@gmail.com" class="form-control" name="email" value="{{ $profile->email }}" id="subtitle" required>
                            <h2>Youtube Video</h2>
                            <input type="text" placeholder="<iframe>" class="form-control" name="youtube" value="{{ $profile->youtube_profile }}" id="subtitle" required>
                            

                            <div class="submit-area">
                                <button type="submit" id="submit" class="theme-btn submit-btn">Save Changes</button>
                            </div>
   
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
        
  
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
          var result = confirm("Are you sure you want to delete this open recruitment?");
          if (result) {
              window.location.href = "/admin/delete-events/" + id;
          }
      }
    </script>
    
    <script>
      let visionEditor, aboutEditor, missionEditor;
      
      ClassicEditor
          .create(document.querySelector('#vision-textarea'))
          .then(editor => {
              visionEditor = editor;
          })
          .catch(error => {
              console.error(error);
          });

      ClassicEditor
          .create(document.querySelector('#about-textarea'))
          .then(editor => {
              aboutEditor = editor;
          })
          .catch(error => {
              console.error(error);
          });

      ClassicEditor
          .create(document.querySelector('#mission-textarea'))
          .then(editor => {
              missionEditor = editor;
          })
          .catch(error => {
              console.error(error);
          });
    </script>
  </body>
</html>