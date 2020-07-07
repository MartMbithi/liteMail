<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="MartDevelopers">

  <title>liteMail - The future of web mail intergration</title>

  <link href="{{ url('as/css/robust.css') }}" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
    <div class="container">
      <a class="navbar-brand" href="{{url('/') }}">liteMail</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
        </ul>
        @if (Route::has('login'))
          <div class="top-right links">
            @auth
              <a class="btn btn-outline-white" href="{{ url('/home') }}">Home</a>
            @else
              <a class="btn btn-outline-success" href="{{ route('login') }}" >Login</a>

              @if (Route::has('register'))
                <a class="btn btn-outline-danger" href="{{ route('register') }}" >Register</a>
              @endif
            @endauth
          </div>
        @endif
	    </div>
    </div>
  </nav>

  <div class="intro py-5 py-lg-9 position-relative text-white">
    <div class="bg-overlay-primary">
      <img src="{{ url('as/img/bg.png') }}" class="img-fluid img-cover" alt="liteMail" />
    </div>
    <div class="intro-content py-6 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
            <h1 class="my-3 display-4 d-none d-lg-inline-block">liteMail</h1>
            <span class="h1 my-3 d-inline-block d-lg-none">liteMail</span>
            <p class="lead mb-3">liteMail library - a Laravel powered light weight web mail library</p>
            <a class="btn btn-success btn-lg mr-lg-2 my-1" href="{{ url('login')}}" role="button">Get started</a>
            <a class="btn btn-outline-white btn-lg my-1" href="#features" role="button">Features</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <main class="main" role="main">
    <div id="features" class="bg-white py-7">
      <div class="container">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="row">
              <div class="col-md-4 ml-auto">
                <h2>liteMail Features</h2>
              </div>
              <div class="col-md-6 mr-auto">
                <p class="lead text-dark">
                  liteMail library comes with a massive list of composite features which makes web mail intergration functionalities easy, clean and effective.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-4">
            <div>
              <a href="pages-landing.html" class="link-unstyled">
                <img src="{{ url('as/img/bg.png') }}" class="img-fluid shadow-sm" alt="Inbuilt compose mail" />
              </a>
              <h5 class="mt-4">Inbuilt Light Weight Web Mail</h5>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="pages-dashboard.html" class="link-unstyled">
                <img src="{{ url('as/img/bg.png') }}" class="img-fluid shadow-sm" alt="Dashboard" />
              </a>
              <h5 class="mt-4">Super Responsive Designs</h5>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <a href="pages-general.html" class="link-unstyled">
                <img src="{{ url('as/img/bg.png') }}" class="img-fluid shadow-sm" alt="Pages" />
              </a>
              <h5 class="mt-4">Full intergrated mailing functionalities</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light pt-6">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto align-self-center mb-5">
            <div class="my-4">
              <h3>Multi-device support</h3>
              <p class="text-dark">
                All pages inside liteMail are optimized for mobile, tablet and desktop. It doesn't matter what device you're using.
              </p>
            </div>
            <div class="my-4">
              <h3>Well-documented</h3>
              <p class="text-dark">
                All liteMail components are well-documented and a Quick Start document is included to speed things up on your side.
              </p>
            </div>
            <div class="my-4">
              <h3>3rd party plugins</h3>
              <p class="text-dark">
                liteMail comes with multiple 3rd party plugins that are easy to use and and combine well with other components.
              </p>
            </div>
          </div>
          <div class="col-md-5 ml-auto mt-4">
            <img src="{{ url('as/img/ipad.png') }}" class="img-fluid" alt="iPad" />
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white py-7">
      <div class="container">

        <div class="row mb-6">
          <div class="col-md-3 ml-auto">
            <h2>Enormous collection of elements</h2>
          </div>
          <div class="col-md-5 mr-auto">
            <p class="lead text-dark">
              liteMail is a opensource web mail library built with Laravel the most popular PHP framework. The library is fully responsive and customizable and can be used for any type of web application.
            </p>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3">
                <i class="far fa-id-badge"></i>
              </div>
              <div class="media-body">
                <h3 class="h4">Responsive</h3>
                <p class="text-dark text-left">
                  With mobile, tablet & desktop support it doesn't matter what device you're using. liteMail is responsive in all browsers.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-warning">
                <i class="far fa-hand-scissors"></i>
              </div>
              <div class="media-body">
                <h3 class="h4">Customizable</h3>
                <p class="text-dark text-left">
                  You don't need to be an expert to customize liteMail. Our code is very readable and well documented.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-danger">
                <i class="far fa-comments"></i>
              </div>
              <div class="media-body">
                <h3 class="h4">Quick support</h3>
                <p class="text-dark text-left">
                  liteMail is supported by specialists who provide quick and effective support. Usually an email reply takes &lt;24h.
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row mt-5">
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-success">
                <i class="far fa-clone"></i>
              </div>
              <div class="media-body">
                <h3 class="h4">Cross browser</h3>
                <p class="text-dark text-left">
                  liteMail works perfectly with: Chrome, Firefox, Safari, Opera and IE 10+. We're working hard to support them.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-purple">
                <i class="far fa-gem"></i>
              </div>
              <div class="media-body">
                <h3 class="h4">Clean code</h3>
                <p class="text-dark text-left">
                  We strictly followed Laravel guidelines to make your integration as easy as possible. All code is handwritten.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3">
                <i class="far fa-arrow-alt-circle-down"></i>
              </div>
              <div class="media-body">
                <h3 class="h4">Free updates</h3>
                <p class="text-dark text-left">
                  From time to time you'll receive an update containing new components, improvements and bugfixes.
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div>
    </div>
  </main>

  <footer role="contentinfo" class="py-6 lh-1 bg-white">
     <div class="container">
      <div class="row">
        <div class="col-12 text-center text-sm">
          <p class="mb-0">&copy; 2020 - <a href="{{url('/') }}">liteMail Library</a>.</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ url('as/js/bundle.js') }}"></script>
</body>

</html>
