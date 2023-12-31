<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our projects</title>

        <!-- fontawesome-link------------------------------------- -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >

        <!-- google font for p ---------------------------- -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
   
   <!-- inter font family --------------------------------------- -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter&family=Readex+Pro&display=swap" rel="stylesheet">
        <!-- bootstrap link-------------------------------------- -->
        <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" >
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}"    >
</head>
<body>

<nav class="navbar navbar-expand-lg mb-3">
              <div class="container">
                  <div class="nav-logo w-25 ">
                <a class="navbar-brand" href="#"><img src="{{asset('front/assets/images/connect-logo.png')}}" alt="" class="w-50"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('home')}}" >Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('services')}}">Services</a>
                    </li>
      
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('projects')}}" >Projects</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
                    </li>
      
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                  
                  </ul>
                </div>
              </div>
            </nav>
          <!-- end of navbar------------------------------------------ -->