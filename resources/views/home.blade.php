@extends('layouts.template')

@section('content')
     <!-- Home Section Start -->
 <section class="home-section pt-0" style="margin-top: 200px;">
    <div class="container-fluid-lg">
      <div class="row g-4">
        <div class="col-xl-8 ratio_65">
          <div class="home-contain h-100">
            <div class="h-100">
              <img
                src="{{asset("")}}assets_user/images/vegetable/banner/1.jpg"
                class="bg-img blur-up lazyload"
                alt=""
              />
            </div>
            <div class="home-detail p-center-left w-75">
              <div>
                <h6>Exclusive offer <span>30% Off</span></h6>
                <h1 class="text-uppercase">
                  Stay home & delivered your
                  <span class="daily">Book Needs</span>
                </h1>
                <p class="w-75 d-none d-sm-block">
                    Dengan membaca, kita menanam benih pengetahuan yang kelak akan berbuah di masa depan dengan bahagia.
                </p>
                <button
                  onclick="location.href = 'produk_review.html';"
                  class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto"
                >
                  Shop Now
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 ratio_65">
          <div class="row g-4">
            <div class="col-xl-12 col-md-6">
              <div class="home-contain">
                <img
                  src="{{asset("")}}assets_user/images/vegetable/banner/2.jpg"
                  class="bg-img blur-up lazyload"
                  alt=""
                />
                <div class="home-detail p-center-left home-p-sm w-75">
                  <div>
                    <h3 class="theme-color">Books Collection</h3>
                    <p class="w-75">Menyediakan berbagai jenis buku yang menarik</p>
                    <button
                    onclick="location.href = 'produk_review.html';"
                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto"
                  >
                    Shop Now
                  </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-12 col-md-6">
              <div class="home-contain">
                <img
                  src="{{asset("")}}assets_user/images/vegetable/banner/3.jpg"
                  class="bg-img blur-up lazyload"
                  alt=""
                />
                <div class="home-detail p-center-left home-p-sm w-75">
                  <div>
                    <h3 class="mt-0 theme-color fw-bold">Cheapest Book</h3>
                    <p class="organic">
                        Membaca adalah seni yang menjadi nyata.
                    </p>
                    <button
                    onclick="location.href = 'produk_review.html';"
                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto"
                  >
                    Shop Now
                  </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Home Section End -->



  <!-- Category Section Start -->
<section class="book-category">
    <div class="container-fluid-lg">
        <div class="title">
            <h2>Categories</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div class="slider-9 book-category-slider">
                        <div>
                            <a href="kategori_produk.html" class="category-box wow fadeInUp">
                                <img src="{{asset("")}}assets_user/images/book/category/1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="shelf"></div>
                </div>
            </div>
        </div>
</section>
<!-- Category Section End -->

<!-- Product Section Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="title">
            <h2>Popular books this year</h2>
        </div>

        <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-sm-3 row-cols-2 g-sm-4 g-3 no-arrow">
            <div>
                <div class="book-product-box wow fadeIn">
                    <div class="label-box">
                        <label class="label">best</label>
                    </div>
                    <div class="product-image">
                        <div class="front">
                            <a href="produk_detail.html">
                                <img src="{{asset("")}}assets_user/images/book/product/31.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </a>
                        </div>
                        <ul class="product-option">
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add to cart">
                                <a href="cart.html">
                                    <i data-feather="shopping-cart"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                <a href="wishlist.html" class="notifi-wishlist">
                                    <i data-feather="heart"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                    <i data-feather="eye"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-detail position-relative">
                        <h6 class="weight">Biography</h6>
                        <a href="produk_detail.html">
                            <h5 class="name">Home Decor Lucky Deer Family Matte Finish Ceramic Figures
                            </h5>
                        </a>
                        <h6 class="byers"><span>By</span> Ellie Thomson, Henry</h6>
                        <h6 class="price">$80.00</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Start -->
<section class="offer-section sale-banner">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <img class="h-100 w-100" src="{{asset("")}}assets_user/images/book/banner/2.jpg">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Top Selling Section Start -->
<section class="top-selling-section">
    <div class="container-fluid-lg mb-5">
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="slider-3_3 product-wrapper">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-selling-box">
                                    <div class="top-selling-title">
                                        <h3>Top Selling</h3>
                                    </div>

                                    <div class="top-selling-contain wow fadeInUp">
                                        <a href="produk_detail.html" class="top-selling-image">
                                            <img src="{{asset("")}}assets_user/images/book/product/43.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <div class="top-selling-detail">
                                            <a href="produk_detail.html">
                                                <h5>Tuffets Whole Wheat Bread</h5>
                                            </a>
                                            <div class="product-rating">
                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                                <span>(34)</span>
                                            </div>
                                            <h6>$ 10.00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-selling-box">
                                    <div class="top-selling-title">
                                        <h3>Trending Products</h3>
                                    </div>

                                    <div class="top-selling-contain wow fadeInUp">
                                        <a href="produk_detail.html" class="top-selling-image">
                                            <img src="{{asset("")}}assets_user/images/book/product/2.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <div class="top-selling-detail">
                                            <a href="produk_detail.html">
                                                <h5>Good Life Refined Sunflower Oil</h5>
                                            </a>
                                            <div class="product-rating">
                                                <ul class="rating">
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star" class="fill"></i>
                                                    </li>
                                                    <li>
                                                        <i data-feather="star"></i>
                                                    </li>
                                                </ul>
                                                <span>(34)</span>
                                            </div>
                                            <h6>$ 10.00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 d-lg-block d-none">
                <div class="ratio_156">
                    <div class="banner-contain-2 hover-effect">
                        <img src="{{asset("")}}assets_user/images/book/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Selling Section End -->

@endsection