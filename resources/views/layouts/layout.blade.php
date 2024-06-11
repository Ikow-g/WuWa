<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <div class="container-md" style="display: flex; flex-direction:column; min-height:100vh;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="https://wutheringwaves.gg/wp-content/uploads/sites/8/2023/08/Wuthering-Waves-Logo.png" alt="" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Tier List</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Characters</a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">
                <img src="" alt="#">
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <main style="flex:1;">
      @yield('content')
    </main>
  
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Terms</a></li>
      </ul>
      <p class="text-center text-muted">© 2024 WuWa, Inc</p>
    </footer>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
