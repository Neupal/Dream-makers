<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>
    @yield('title')
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="{{asset('light/css/simplebar.css')}}">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="{{ asset('light/css/feather.css')}}">
  <link rel="stylesheet" href="{{asset('light/css/dataTables.bootstrap4.css')}}">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="{{asset('light/css/daterangepicker.css')}}">
  <!-- App CSS -->
  <link rel="stylesheet" href="{{asset('light/css/app-light.css')}}" id="lightTheme">
  <link rel="stylesheet" href="{{asset('light/css/app-dark.css')}}" id="darkTheme" disabled>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="vertical  light  ">
  <div class="wrapper">
    <nav class="topnav navbar navbar-light">
      <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
      </button>
      <!-- <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
      </form> -->
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
            <i class="fe fe-sun fe-16"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
            <span class="fe fe-grid fe-16"></span>
          </a>
        </li>
        <li class="nav-item nav-notif">
          <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
            <span class="fe fe-bell fe-16"></span>
            <span class="dot dot-md bg-success"></span>
          </a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="avatar avatar-sm mt-2">
              <img src="{{asset('light/image/logo.jpg')}}" alt="..." class="avatar-img rounded-circle">
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      <nav class="vertnav navbar navbar-light">
        <div class="w-100 mb-1 d-flex justify-content-start p-1">
          <a href="">
            <img height="50px" width="50px" src="{{ asset('light/image/logo.jpg')}}">
            <span class="ml-1 text-info item-text">Dream Maker</span>
          </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <br>
            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="nav-link">
              <i class="fe fe-home fe-16"></i>
              <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
          <span>Website Pages</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item dropdown">
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Home</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('introindex')}}"><span class="ml-1 item-text">Banner</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('homeindex')}}"><span class="ml-1 item-text">Our Facilities</span></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('consultingindex')}}"><span class="ml-1 item-text">Facilities</span></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('standardindex')}}"><span class="ml-1 item-text">Our Standard</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('reachindex')}}"><span class="ml-1 item-text">Our Goodwill</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('questionindex')}}"><span class="ml-1 item-text">Frequently Ask Question</span></a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item w-100">
            <a class="nav-link" href="widgets.html">
              <i class="fe fe-layers fe-16"></i>
              <span class="ml-3 item-text">Widgets</span>
              <span class="badge badge-pill badge-primary">New</span>
            </a>
          </li> -->
          <li class="nav-item dropdown">
            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-credit-card fe-16"></i>
              <span class="ml-3 item-text">About</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="forms">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('leadershipindex')}}"><span class="ml-1 item-text">Our Leadership</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('expertindex')}}"><span class="ml-1 item-text">Our Experts</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('clientindex')}}"><span class="ml-1 item-text">Happy Clients</span></a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-grid fe-16"></i>
              <span class="ml-3 item-text">Services</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="tables">
            <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('valueindex')}}"><span class="ml-1 item-text">Our Experiences</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('serviceindex')}}"><span class="ml-1 item-text">Our Services</span></a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
              <i class="fe fe-layout fe-16"></i>
              <span class="ml-3 item-text">Products</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="tables">
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{route('consultingindex')}}"><span class="ml-1 item-text">Our Products</span></a>
              </li>
            </ul>
          </li>
        <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item w-100">
            <a class="nav-link" href="{{url('logout')}}">
              <i class="fe fe-help-circle fe-16"></i>
              <span class="ml-3 item-text">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <main role="main" class="main-content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </main>
  </div>
  <script src="{{asset('light/js/jquery.min.js')}}"></script>
  <script src="{{asset('light/js/popper.min.js')}}"></script>
  <script src="{{asset('light/js/moment.min.js')}}"></script>
  <script src="{{asset('light/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('light/js/simplebar.min.js')}}"></script>
  <script src="{{asset('light/js/jquery.stickOnScroll.js')}}"></script>
  <script src="{{asset('light/js/daterangepicker.js')}}"></script>
  <script src="{{asset('light/js/tinycolor-min.js')}}"></script>
  <script src="{{asset('light/js/config.js')}}"></script>
  <script src="{{asset('light/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('light/js/dataTables.bootstrap4.min.js')}}"></script>
  <script>
    $('#dataTable-1').DataTable({
      autoWidth: true,
      "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
      ]
    });
  </script>
  <script src="{{asset('light/js/apps.js')}}"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
</body>

</html>