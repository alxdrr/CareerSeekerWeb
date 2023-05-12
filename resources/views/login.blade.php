<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('img/titleLogo.png') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="jquery-3.6.3.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/logic.js') }}" />

    <title>Career Seeker</title>
  </head>

  <body class="home">
  <div id="nav-bg"></div>
    <nav class="navbar navbar-expand-lg">
      <div class="nav container-xxl">
        <a href="home">
          <img src="{{ asset('img/Logo.png') }}" alt="" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vacancy">Vacancy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="career-tips">Career Tips</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Help
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">FAQ</a></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <a href="login" class="login">
          <button type="button" id="btn-signin">
            Sign In
            <div class="arrow-wrapper">
              <div class="arrow"></div>
            </div>
          </button>
        </a>
      </div>
    </nav>
    <div class="hero container-fluid">
        <div class="hero-text">Login</div>
        <form class="form">
            <button>
            <img src="{{ asset('icon/username.png') }}" alt="" />
            </button>
            <input
            class="input"
            placeholder="Username"
            required=""
            type="text"
            />
            <button class="reset" type="reset">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
            </button>
        </form>

        <form class="form">
            <button>
            <img src="{{ asset('icon/password.png') }}" alt="" />
            </button>
            <input
            class="input"
            placeholder="Password"
            required=""
            type="text"
            />
            <button class="reset" type="reset">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
                ></path>
            </svg>
            </button>
        </form>
        <a href="">
        <button id="btn-explore">
            Login
            <div class="arrow-wrapper">
            <div class="arrow"></div>
            </div>
        </button>
        </a>
        </div>
    <footer class="footer container-fluid">
      <div id="connect">
        Connect With Us
        <div class="social-icon">
          <a href="linked.com"><img src="{{ asset('icon/linkedin.png') }}" alt="" /></a>
          <a href="facebook.com"><img src="{{ asset('icon/fb.png') }}" alt="" /></a>
          <a href="twitter.com"><img src="{{ asset('icon/twt.png') }}" alt="" /></a>
        </div>
      </div>

      <div id="explore">
        Explore
        <ul class="navigation">
          <li>
            <a href="#">Company List</a>
          </li>
          <li>
            <a href="#">Career Tips</a>
          </li>
          <li>
            <a href="#">Testimonials</a>
          </li>
        </ul>
      </div>

      <div id="support">
        Support
        <ul class="navigation">
          <li>
            <a href="#">FAQ</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
          <li>
            <a href="#">Visit Us</a>
          </li>
        </ul>
      </div>

      <div id="copyright">
        <a href=""><img src="{{ asset('img/Logo-outline.png') }}" alt="" /></a>
        © 2023 Career Seeker, All Rights Reserved.
      </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>