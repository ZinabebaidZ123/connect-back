<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
  Bright Empire
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle"     href="{{ asset('dashboard/assets/css/material-dashboard.min.css?v=3.0.0') }}" rel="stylesheet" />
  <style>

.form-control{
  padding: 8px 10px;
  border: 1px solid   #b3a1a1 !important;
}

.form-select{
  padding: 8px 10px;
  border: 1px solid   #b3a1a1 !important;
}
  </style>
</head>
<body class="g-sidenav-show  bg-gray-200">
    @include('./dashboard.layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">   
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
         
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control">
              </div>
            </div>
            
          </div>
        </div>
    </nav>
    @yield('content')
</main>