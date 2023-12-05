<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/assets/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
</head>
<body>
<div class="container">

  <!-- header -->

  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-1 mb-4 border-bottom-header">
  <!-- section1 -->
    <div class="col-lg-4 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="/assets/favicon.ico" alt="Logo">
      </a>
    </div>
  <!-- section2 -->
    <ul class="nav col-12 col-lg-4 mb-2 justify-content-center mb-md-0">
      <li><a href="/Aboutme" class="nav-link px-2 mx-1 text-dark">About me</a></li>
      <li><a href="/Projects" class="nav-link px-2 mx-1 text-dark">Projects</a></li>
      <li><a href="/Aboutme" class="nav-link px-2 mx-1 text-dark">Contact me</a></li>
    </ul>
  <!-- section3 -->
    <div class="col-lg-4 text-end">
      <a href="#"><i class="fa fa-linkedin mx-2 text-dark fs-2"></i></a>
      <a href="https://instagram.com/mammad_sadati?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="fa fa-instagram mx-2 text-dark fs-2"></i></a>
      <a href="https://t.me/mammad_sadati"><i class="fa fa-telegram mx-2 text-dark fs-2"></i></a>
    </div>
  </header>
</div>

    @yield('content')

  <!-- footer -->

  <footer class="container-fluid my-5 f-bg pb-5">
    <div class="container py-5 d-lg-flex">
      <div class="col-12 col-lg-6">
        <h2>
          Are you interested? <br>
          Say Hi!
        </h2>
        <div class="d-flex footer-info">
          <div>
            <img class="img-info" src="/assets/avatar.png" alt="Mohammad Sadati">
          </div>
          <div class="align-self-center mx-2 text-white">
            <h3>
              Mohammad Sadati
            </h3>
            <p>
              Web Developer
            </p>
            <div>
              <a href="#"><i class="fa fa-linkedin mx-2 text-dark fs-2 text-white"></i></a>
              <a href="https://instagram.com/mammad_sadati?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="fa fa-instagram mx-2 text-dark fs-2 text-white"></i></a>
              <a href="https://t.me/mammad_sadati"><i class="fa fa-telegram mx-2 text-dark fs-2 text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <img class="tree" src="/assets/Free Family Tree Silhouette.png.png" alt="tree">
      </div>
    </div>
    <div class="mx-5 my-1">
      <a href="#"><i class="fa fa-arrow-circle-up fs-1 arrow-up"></i></a>
    </div>
  </footer>
</body>
</html>
