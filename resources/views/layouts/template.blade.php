<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{asset("")}}assets_user/images/favicon/7.png" type="image/x-icon">
    <title>Dashboard</title>




    <!-- Google font -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset("")}}assets_user/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="{{asset("")}}assets_user/css/animate.min.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{asset("")}}assets_user/css/bulk-style.css">
    <link rel="stylesheet" type="text/css" href="{{asset("")}}assets_user/css/vendors/animate.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset("")}}assets_user/css/style.css">
</head>

<body class="theme-color-6">
    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

@include('layouts.header')

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="/pages">
                    <i><img width="20" height="20" src="https://img.icons8.com/glyph-neue/64/FFFFFF/home-page.png" alt="home-page"/></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="produk_review.html">
                    <i><img width="20" height="20" src="https://img.icons8.com/external-creatype-glyph-colourcreatype/64/FFFFFF/external-board-marketplace-glyph-creatype-glyph-colourcreatype-2.png" alt="external-board-marketplace-glyph-creatype-glyph-colourcreatype-2"/></i>
                    <span>Product</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i><img width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/google-web-search.png" alt="google-web-search"/></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="toko_review.html" class="notifi-wishlist">
                    <i><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/shop.png" alt="shop"/></i>
                    <span>Toko</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i><img width="20" height="20" src="https://img.icons8.com/material-rounded/24/FFFFFF/sell-stock.png" alt="sell-stock"/></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

   @yield('content')



        <!-- Cookie Bar Box Start -->
        <div class="cookie-bar-box">
            <div class="cookie-box">
                <div class="cookie-image">
                    <img src="{{asset("")}}assets_user/images/cookie-bar.png" class="blur-up lazyload" alt="">
                    <h2>Cookies!</h2>
                </div>

                <div class="cookie-contain">
                    <h5 class="text-content">We use cookies to make your experience better</h5>
                </div>
            </div>

            <div class="button-group">
                <button class="btn privacy-button">Privacy Policy</button>
                <button class="btn ok-button">OK</button>
            </div>
        </div>
        <!-- Cookie Bar Box End -->




    <!-- Footer Section Start -->
    <footer class="section-t-space footer-section-2 footer-color-3">
        <div class="container-fluid-lg">
          <div class="main-footer">
            <div class="service-contain">
              <div class="service-box">
                <div class="service-image">
                  <img
                    src="https://themes.pixelstrap.com/fastkart/assets/svg/product.svg"
                    class="blur-up lazyload"
                    alt=""
                  />
                </div>

                <div class="service-detail">
                  <h5 style="color: aliceblue">Produk Uptodate</h5>
                </div>
              </div>

              <div class="service-box">
                <div class="service-image">
                  <img
                    src="https://themes.pixelstrap.com/fastkart/assets/svg/delivery.svg"
                    class="blur-up lazyload"
                    alt=""
                  />
                </div>

                <div class="service-detail">
                  <h5 style="color: aliceblue">Pengiriman Aman</h5>
                </div>
              </div>

              <div class="service-box">
                <div class="service-image">
                  <img
                    src="https://themes.pixelstrap.com/fastkart/assets/svg/discount.svg"
                    class="blur-up lazyload"
                    alt=""
                  />
                </div>

                <div class="service-detail">
                  <h5 style="color: aliceblue">Harga Terjangkau</h5>
                </div>
              </div>

              <div class="service-box">
                <div class="service-image">
                  <img
                    src="https://themes.pixelstrap.com/fastkart/assets/svg/market.svg"
                    class="blur-up lazyload"
                    alt=""
                  />
                </div>

                <div class="service-detail">
                  <h5 style="color: aliceblue">E-Comerce Termurah</h5>
                </div>
              </div>
            </div>

            <div class="row g-md-4 gy-sm-5">
              <div class="col-xxl-3 col-xl-4 col-sm-6">
                <a href="index.html" class="foot-logo theme-logo">
                  <img
                    src="{{asset("")}}assets_user/images/logo/4.png"
                    class="img-fluid blur-up lazyload"
                    style="width: 240px"
                    alt=""
                  />
                </a>
                <p class="information-text information-text-2">
                  Dengan membaca, kita belajar memahami dunia, dan jiwa kita pun
                  tumbuh menjadi lebih bijaksana.
                </p>
                <ul class="social-icon">
                  <li class="light-bg">
                    <a href="https://www.facebook.com/" class="footer-link-color">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="light-bg">
                    <a
                      href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                      class="footer-link-color"
                    >
                      <i class="fab fa-google"></i>
                    </a>
                  </li>
                  <li class="light-bg">
                    <a
                      href="https://twitter.com/i/flow/login"
                      class="footer-link-color"
                    >
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="light-bg">
                    <a
                      href="https://www.instagram.com/"
                      class="footer-link-color"
                    >
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li class="light-bg">
                    <a href="https://in.pinterest.com/" class="footer-link-color">
                      <i class="fab fa-pinterest-p"></i>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="col-xxl-2 col-xl-4 col-sm-6">
                <div class="footer-title">
                  <h4 class="text-white">About Codexstore</h4>
                </div>
                <ul class="footer-list footer-contact footer-list-light">
                  <li>
                    <a href="about_us.html" class="light-text">About Us</a>
                  </li>
                  <li>
                    <a href="contact_us.html" class="light-text">Contact Us</a>
                  </li>
                  <li>
                    <a href="about_us.html" class="light-text">Careers</a>
                  </li>
                </ul>
              </div>

              <div class="col-xxl-2 col-xl-4 col-sm-6">
                <div class="footer-title">
                  <h4 class="text-white">Useful Link</h4>
                </div>
                <ul class="footer-list footer-list-light footer-contact">
                  <li>
                    <a href="#" class="light-text">Home</a>
                  </li>
                  <li>
                    <a href="produk_review.html" class="light-text">Produk</a>
                  </li>
                  <li>
                    <a href="toko_review.html" class="light-text">Toko</a>
                  </li>
                  <li>
                    <a href="contact_us.html" class="light-text">Contact US</a>
                  </li>
                  <li>
                    <a href="about_us.html" class="light-text">About Us</a>
                  </li>
                </ul>
              </div>

              <div class="col-xxl-3 col-xl-4 col-sm-6">
                <div class="footer-title">
                  <h4 class="text-white">Store information</h4>
                </div>
                <ul class="footer-address footer-contact">
                  <li>
                    <a href="https://www.google.com/maps" class="light-text">
                      <div class="inform-box flex-start-box">
                        <i data-feather="map-pin"></i>
                        <p>Indonesia, Jawa Timur - Madura Sumenep</p>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a
                      href="https://www.whatsapp.com/?lang=id_ID"
                      class="light-text"
                    >
                      <div class="inform-box">
                        <i data-feather="phone"></i>
                        <p>Call us: 087874438434</p>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a
                      href="https://workspace.google.com/intl/id/gmail/"
                      class="light-text"
                    >
                      <div class="inform-box">
                        <i data-feather="mail"></i>
                        <p>Email Us: codexstore96@gmail.com</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="sub-footer sub-footer-lite section-b-space section-t-space">
            <div class="left-footer">
              <p class="light-text">
                2024 Copyright By
                <a
                  href="https://mywebsite-fri.vercel.app/"
                  target="_blank"
                  style="color: inherit; text-decoration: none"
                  >CODE</a
                >
                <a
                  href="https://anandamw.turbo-main.com/"
                  target="_blank"
                  style="color: inherit; text-decoration: none"
                  >X</a
                >
                <a
                  href="https://berrydwi.github.io/PortoBerry/"
                  target="_blank"
                  style="color: inherit; text-decoration: none"
                  >STORE</a
                >
              </p>
            </div>

            <ul class="payment-box">
              <li>
                <img
                  src="{{asset("")}}assets_user/images/icon/paymant/visa.png"
                  class="blur-up lazyload"
                  alt=""
                />
              </li>
              <li>
                <img
                  src="{{asset("")}}assets_user/images/icon/paymant/discover.png"
                  alt=""
                  class="blur-up lazyload"
                />
              </li>
              <li>
                <img
                  src="{{asset("")}}assets_user/images/icon/paymant/american.png"
                  alt=""
                  class="blur-up lazyload"
                />
              </li>
              <li>
                <img
                  src="{{asset("")}}assets_user/images/icon/paymant/master-card.png"
                  alt=""
                  class="blur-up lazyload"
                />
              </li>
              <li>
                <img
                  src="{{asset("")}}assets_user/images/icon/paymant/giro-pay.png"
                  alt=""
                  class="blur-up lazyload"
                />
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Tap to top and theme setting button start -->
      <div class="theme-option">
        <div class="setting-box">
          <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
          </button>

          <div class="theme-setting-2">
            <div class="theme-box">
              <ul>
                <li>
                  <div class="setting-name">
                    <h4>Color</h4>
                  </div>
                  <div class="theme-setting-button color-picker">
                    <form class="form-control">
                      <label for="colorPick" class="form-label mb-0"
                        >Theme Color</label
                      >
                      <input
                        type="color"
                        class="form-control form-control-color"
                        id="colorPick"
                        value="#417394"
                        title="Choose your color"
                      />
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="back-to-top">
          <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <!-- Tap to top and theme setting button end -->

      <!-- Bg overlay Start -->
      <div class="bg-overlay"></div>
      <!-- Bg overlay End -->

      <!-- latest jquery-->
      <script src="{{asset("")}}assets_user/js/jquery-3.6.0.min.js"></script>

       <!-- Lord-icon Js -->
       <script src="{{asset("")}}assets_user/js/lusqsztk.js"></script>


      <!-- jquery ui-->
      <script src="{{asset("")}}assets_user/js/jquery-ui.min.js"></script>

      <!-- Bootstrap js-->
      <script src="{{asset("")}}assets_user/js/bootstrap/bootstrap.bundle.min.js"></script>
      <script src="{{asset("")}}assets_user/js/bootstrap/bootstrap-notify.min.js"></script>
      <script src="{{asset("")}}assets_user/js/bootstrap/popper.min.js"></script>

      <!-- feather icon js-->
      <script src="{{asset("")}}assets_user/js/feather/feather.min.js"></script>
      <script src="{{asset("")}}assets_user/js/feather/feather-icon.js"></script>

      <!-- Delivery Option js -->
      <script src="{{asset("")}}assets_user/js/delivery-option.js"></script>

      <!-- Lazyload Js -->
      <script src="{{asset("")}}assets_user/js/lazysizes.min.js"></script>

      <!-- Slick js-->
      <script src="{{asset("")}}assets_user/js/slick/slick.js"></script>
      <script src="{{asset("")}}assets_user/js/slick/slick-animation.min.js"></script>
      <script src="{{asset("")}}assets_user/js/slick/custom_slick.js"></script>
      <script src="{{asset("")}}assets_user/js/custom-slick-animated.js"></script>

      <!-- Quantity js -->
      <script src="{{asset("")}}assets_user/js/quantity.js"></script>
      <script src="{{asset("")}}assets_user/js/quantity-2.js"></script>

        <!-- Price Range Js -->
        <script src="{{asset("")}}assets_user/js/ion.rangeSlider.min.js"></script>

        <!-- sidebar open js -->
        <script src="{{asset("")}}assets_user/js/filter-sidebar.js"></script>


      <!-- script js -->
      <script src="{{asset("")}}assets_user/js/script.js"></script>

      <!-- theme setting js -->
      <script src="{{asset("")}}assets_user/js/theme-setting.js"></script>
    </body>
  </html>

