<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pukalapan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/f7091fe396.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
</head>

<body>

    <!-- Isi Content -->

    <div class="shopify-grid padding-large">
        <div class="container">
            <div class="row">
                <!-- Bar Kategori -->

                <section id="selling-products" class="col-md-9 product-store">
                    <div class="container">
                        <ul class="tabs list-unstyled">
                            <li data-tab-target="#" class="active tab">All</li>
                            @if ($kategoris->onFirstPage())
                            @else
                                <li class="active tab">
                                    <a href="{{ $kategoris->previousPageUrl() }}">
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </a>
                                </li>
                            @endif
                            @foreach ($kategoris as $kategori)
                                <li data-tab-target="#" class="active tab">{{ $kategori->nama_kategori }}</li>
                            @endforeach
                            @if ($kategoris->hasMorePages())
                                <li class="active tab">
                                    <a href="{{ $kategoris->nextPageUrl() }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </li>
                            @else
                            @endif
                        </ul>

                        <div class="tab-content">
                            <div id="all" data-tab-content class="active">
                                <div class="row d-flex flex-wrap">
                                    @foreach ($bukus as $buku)
                                        <div class="product-item col-lg-3 col-md-2 col-sm-2">
                                            <div class="image-holder">
                                                <img src="{{ asset('/storage/bukus/' . $buku->foto) }}" alt="Books"
                                                    class="product-image">
                                            </div>
                                            <div class="product-detail">
                                                    <button type="button" class="wishlist-btn">
                                                            <i class="icon icon-heart"></i>
                                                            Like
                                                    </button>

                                                    <button type="button"
                                                    class="btn-wrap cart-link d-flex align-items-center"    data-toggle="modal" data-target="#exampleModal">add to cart
                                                    <i class="icon icon-arrow-io"></i>
                                                    </button>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">{{ $buku->judul_buku }}</a>
                                                </h3>
                                                <div class="item-price text-primary">Ready</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            
                        <!-- sampel konten -->
                            <!--                             
                                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                                        <div class="image-holder">
                                            <img src="images/selling-products20.jpg" alt="Books"
                                                class="product-image">
                                        </div>
                                        <div class="cart-concern">
                                            <div class="cart-button d-flex justify-content-between align-items-center">
                                                <button type="button"
                                                    class="btn-wrap cart-link d-flex align-items-center">add to cart <i
                                                        class="icon icon-arrow-io"></i>
                                                </button>
                                                <button type="button" class="view-btn tooltip d-flex">
                                                    <i class="icon icon-screen-full"></i>
                                                    <span class="tooltip-text">Quick view</span>
                                                </button>
                                                <button type="button" class="wishlist-btn">
                                                    <i class="icon icon-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <h3 class="product-title">
                                                <a href="single-product.html">Stylish Gadgets</a>
                                            </h3>
                                            <div class="item-price text-primary">$30.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        @include('user.modal-buku.modal')

                        <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                            <div class="pagination loop-pagination d-flex justify-content-center">
                                <a href="#" class="pagination-arrow d-flex align-items-center">
                                    <i class="icon icon-arrow-left"></i>
                                </a>
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a href="#" class="pagination-arrow d-flex align-items-center">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </section>

                <!-- Side Bar kategori  -->

                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="widgets widget-menu">
                            <div class="widget-search-bar">
                                <form role="search" method="get" class="d-flex">
                                    <input class="search-field" placeholder="Search" type="text">
                                    <button class="btn btn-dark"><i class="icon icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="widgets widget-product-bukumapel">
                            <h5 class="widget-title">Buku Mapel</h5>
                            <ul class="product-bukumapel sidebar-list list-unstyled">
                                <li class="bukumapel-item">
                                    <a href="">Ipa</a>
                                </li>
                                <li class="bukumapel-item">
                                    <a href="">Ips</a>
                                </li>
                                <li class="bukumapel-item">
                                    <a href="">Pkn</a>
                                </li>
                                <li class="bukumapel-item">
                                    <a href="">B Indonesia</a>
                                </li>
                                <li class="bukumapel-item">
                                    <a href="">B Inggris</a>
                                </li>
                                <li class="bukumapel-item">
                                    <a href="">Pai</a>
                                </li>
                                <li class="bukumapel-item">
                                    <a href="">Seni Budaya</a>
                                </li>
                            </ul>
                        </div>
                </aside>

            </div>
        </div>
    </div>

    <hr>
    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                <h2 class="section-title">Best Book of the Year</h2>
                <div class="btn-wrap align-right">
                    <a href="blog.html" class="d-flex align-items-center">Read Anymore <i
                            class="icon icon icon-arrow-io"></i>
                    </a>
                </div>
            </div>
            <div class="row d-flex flex-wrap">
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="single-post.html">
                            <img src="{{ asset('asset/images/ipa.jpg') }}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">7</div>
                            <div class="meta-month">Nov-2023</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="single-post.html">top 10 great book your student</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Mapel</a>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="single-post.html">
                            <img src="{{ asset('asset/images/ipa.jpg') }}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">7</div>
                            <div class="meta-month">Nov-2023</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="single-post.html">top 10 great book your student</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Mapel</a>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="single-post.html">
                            <img src="{{ asset('asset/images/ipa.jpg') }}" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">7</div>
                            <div class="meta-month">Nov-2023</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="single-post.html">top 10 great book your student</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Mapel</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="brand-collection" class="padding-medium bg-light-grey">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                <img src="{{ asset('asset/images/brand1.png') }}" alt="phone" class="brand-image">
                <img src="{{ asset('asset/images/brand2.png') }}" alt="phone" class="brand-image">
                <img src="{{ asset('asset/images/brand3.png') }}" alt="phone" class="brand-image">
                <img src="{{ asset('asset/images/brand4.png') }}" alt="phone" class="brand-image">
                <img src="{{ asset('asset/images/brand5.png') }}" alt="phone" class="brand-image">
            </div>
        </div>
    </section>
