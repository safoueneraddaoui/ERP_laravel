<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ get_system_setting('application_name') }}</title>
  <meta content="{{ get_system_setting('meta_description') }}" name="description">
  <meta content="{{ get_system_setting('meta_keywords') }}" name="keywords">

  @if(get_system_setting('application_favicon'))
  <!-- Favicon -->
  <link rel="icon" href="{{ get_system_setting('application_favicon') }}">
  @endif

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('themes/bikin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('themes/bikin/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('themes/bikin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('themes/bikin/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('themes/bikin/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('themes/bikin/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('themes/bikin/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      @if(get_system_setting('application_logo'))
      <!-- Image logo -->
      <a href="/" class="logo mr-auto"><img src="{{ get_system_setting('application_logo') }}" alt="logo" class="img-fluid"></a>
      @else
      <!-- Text logo -->
      <h1 class="logo mr-auto"><a href="/">{{ get_system_setting('application_name') }}</a></h1>
      @endif

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">{{ __('home') }}</a></li>
          <li><a href="#about">{{ __('about') }}</a></li>
          <li><a href="#features">{{ __('features') }}</a></li>
          <li><a href="#services">{{ __('services') }}</a></li>
          <li><a href="#pricing">{{ __('pricing') }}</a></li>
          <li><a href="#contact">{{ __('contact') }}</a></li>
          <li><a href="{{ route('login') }}">{{ __('login') }}</a></li>
        </ul>
      </nav>

      <a href="{{ route('register') }}" class="get-started-btn">{{ __('Register') }}</a>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>{{ get_theme_setting('bikin', 'hero_title') }}</h1>
      <h2>{{ get_theme_setting('bikin', 'hero_description') }}</h2>
      <a href="{{ route('register') }}" class="btn-get-started scrollto">{{ __('Register') }}</a>
      <img src="{{ asset('themes/bikin/img/hero-img.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>
  </section>
  <main id="main">
  @foreach ($data as $item)
    <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>{{ get_theme_setting('bikin', 'about_title') }}</h3>
              <p>
                {{ get_theme_setting('bikin', 'about_description') }}
              </p>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>{{ get_theme_setting('bikin', 'about_1_title') }}</h4>
                  <p>{{ get_theme_setting('bikin', 'about_1_description') }}</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>{{ get_theme_setting('bikin', 'about_2_title') }}</h4>
                  <p>{{ get_theme_setting('bikin', 'about_2_description') }}</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>{{ get_theme_setting('bikin', 'about_3_title') }}</h4>
                  <p>{{ get_theme_setting('bikin', 'about_3_description') }}</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>{{ get_theme_setting('bikin', 'about_4_title') }}</h4>
                  <p>{{ get_theme_setting('bikin', 'about_4_description') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @if($item->value == '1')

    <section id="features" class="features" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>{{ get_theme_setting('bikin', 'features_title') }}</h2>
          <p>{{ get_theme_setting('bikin', 'features_description') }}</p>
        </div>

        <div class="row content mt-5">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('themes/bikin/img/features-1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <h3>{{ get_theme_setting('bikin', 'features_1_title') }}</h3>
            <p>{{ get_theme_setting('bikin', 'features_1_description') }}</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('themes/bikin/img/features-2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>{{ get_theme_setting('bikin', 'features_2_title') }}</h3>
            <p>{{ get_theme_setting('bikin', 'features_2_description') }}</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{ asset('themes/bikin/img/features-3.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>{{ get_theme_setting('bikin', 'features_3_title') }}</h3>
            <p>{{ get_theme_setting('bikin', 'features_3_description') }}</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('themes/bikin/img/features-4.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>{{ get_theme_setting('bikin', 'features_4_title') }}</h3>
            <p>{{ get_theme_setting('bikin', 'features_4_description') }}</p>
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ get_theme_setting('bikin', 'services_title') }}</h2>
          <p>{{ get_theme_setting('bikin', 'services_description') }}</p>
        </div>

        <div class="row">
          @if(get_theme_setting('bikin', 'services_1_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_1_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_1_description') }}</p>
            </div>
          </div>
          @endif

          @if(get_theme_setting('bikin', 'services_2_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_2_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_2_description') }}</p>
            </div>
          </div>
          @endif

          @if(get_theme_setting('bikin', 'services_3_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_3_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_3_description') }}</p>
            </div>
          </div>
          @endif

          @if(get_theme_setting('bikin', 'services_4_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_4_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_4_description') }}</p>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>

    @else

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>{{ get_theme_setting('bikin', 'services_title') }}</h2>
          <p>{{ get_theme_setting('bikin', 'services_description') }}</p>
        </div>

        <div class="row">
          @if(get_theme_setting('bikin', 'services_1_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_1_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_1_description') }}</p>
            </div>
          </div>
          @endif

          @if(get_theme_setting('bikin', 'services_2_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_2_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_2_description') }}</p>
            </div>
          </div>
          @endif

          @if(get_theme_setting('bikin', 'services_3_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_3_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_3_description') }}</p>
            </div>
          </div>
          @endif

          @if(get_theme_setting('bikin', 'services_4_title'))
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a>{{ get_theme_setting('bikin', 'services_4_title') }}</a></h4>
              <p class="description">{{ get_theme_setting('bikin', 'services_4_description') }}</p>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>

    @endif

    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>{{ get_theme_setting('bikin', 'contact_title') }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              @if(get_theme_setting('bikin', 'contact_address'))
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>{{ get_theme_setting('bikin', 'contact_address_title') }}</h3>
                  <p>{{ get_theme_setting('bikin', 'contact_address') }}</p>
                </div>
              </div>
              @endif

              @if(get_theme_setting('bikin', 'contact_email'))
              <div class="col">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>{{ get_theme_setting('bikin', 'contact_email_title') }}</h3>
                  <p>{{ get_theme_setting('bikin', 'contact_email') }}</p>
                </div>
              </div>
              @endif

              @if(get_theme_setting('bikin', 'contact_phone'))
              <div class="col">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>{{ get_theme_setting('bikin', 'contact_phone_title') }}</h3>
                  <p>{{ get_theme_setting('bikin', 'contact_phone') }}</p>
                </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
@endforeach
  </main>
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright {{ date('Y') }} <strong><span>{{ get_system_setting('application_name') }}</span></strong>. All Rights Reserved.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @if(get_theme_setting('bikin', 'social_twitter_link'))
        <a href="{{ get_theme_setting('bikin', 'social_twitter_link') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
        @endif

        @if(get_theme_setting('bikin', 'social_facebook_link'))
        <a href="{{ get_theme_setting('bikin', 'social_facebook_link') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
        @endif

        @if(get_theme_setting('bikin', 'social_instagram_link'))
        <a href="{{ get_theme_setting('bikin', 'social_instagram_link') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        @endif

        @if(get_theme_setting('bikin', 'social_linkedin_link'))
        <a href="{{ get_theme_setting('bikin', 'social_linkedin_link') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        @endif
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('themes/bikin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('themes/bikin/vendor/aos/aos.js') }}"></script>

  <script src="{{ asset('themes/bikin/js/main.js') }}"></script>

</body>

</html>