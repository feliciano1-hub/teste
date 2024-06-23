<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link href="assets/bootstrap/css/style.css" rel="stylesheet">
    <title>Home</title>
</head>
<body class="bg-light">
    
    <nav class="navbar  fixed-top justify-content-between">
        <div>
            <a class="navbar-brand"><img src="http://127.0.0.1:8000/assets/img/Picture.png" width="55px" height="55px"></a>
        
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <img src="http://127.0.0.1:8000/assets/img/icons8_menu_24px.png">
            </a>
        
        </div>
        <div class="dropdown">
            <a href="#" class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2 img-thumbnail" src="http://127.0.0.1:8000/assets/img/IMG_5989 (3).jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex" style="color: white">John Doe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-1 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="{{route('home')}}" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </nav>

    <div class="sidebar pb-3" style="margin-top: 86px;">
        <nav class="sidebar container-fluid d-flex flex-column flex-shrink-0 p-3 " style="width: 260px; margin-top:86px; height: auto;">
            <div class="d-flex align-items-center ms-4 mb-4" style="padding-top: 15px;">
                <div class="position-relative">
                    <img class="rounded-circle" src="http://127.0.0.1:8000/assets/img/IMG_5989 (3).jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0" style="color: white">Jhon Doe</h6>
                    <span style="color:white;">Admin</span>
                </div>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <img class="me-lg-2" src="http://127.0.0.1:8000/assets/img/icons8_speed_80px.png" alt="" style="width: 35px; height: 35px;">
                    <span class="d-none d-lg-inline-flex" style="color: white">Dashboard</span> 
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                    <img class="me-lg-2" src="http://127.0.0.1:8000/assets/img/icons8_student_male_80px.png" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex" style="color: white">Estudantes</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                    <img class="me-lg-2" src="http://127.0.0.1:8000/assets/img/icons8_course_80px.png" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex" style="color: white">Cursos</span>
                </a>
              </li>
            </ul>
            <hr>
            
        </nav>
    </div>


    <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/bootstrap/js/main.js"></script>
    @yield('content')
</body>
</html>