
  <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
          <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
          <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <!-- search bar -->
        <h5 class="cat-list-title">Browse Categories</h5>
        
        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="/kategori" title="Men Jackets">All</a>
          </li>
          <li class="cat-list-item">
            <a href="/kategori" title="Fashion">Paket</a>
          </li>
          <li class="cat-list-item">
            <a href="/kategori" title="Casual Wears">Cerita</a>
          </li>
          <li class="cat-list-item">
            <a href="/kategori" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="/kategori" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="/kategori" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="/kategori" title="Kids">Kids</a>
          </li>
        </ul>

      </div>
    </div>
    <header id="header">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div style="background-color: CD5C08;">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <p><strong>Pukulapan</strong>
                </p>
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p>Web Peminjaman Buku Perpustakaan</p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <li>
                    <a href="login.html">
                      <i class="icon icon-user"></i>
                    </a>
                  </li>
                  <li>
                    <a href="cart.html">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  <li>
                    <a href="wishlist.html">
                      <i class="icon icon-heart"></i>
                    </a>
                  </li>
                  <li class="user-items search-item pe-3">
                    <a href="#" class="search-button">
                      <i class="icon icon-search"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            </div>
          </div>
        </nav>
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.html">
                    <img src="{{asset('asset/images/main-logo.png')}}" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                    <!-- Homepage -->

                      <li class="menu-item has-sub">
                        <a href="/homepage" class="item-anchor active d-flex align-item-center" data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="/homepage" class="item-anchor active">Home</a></li>
                          <li><a href="/homepage" class="item-anchor active">Terbaru</a></li>
                          <li><a href="/homepage" class="item-anchor active">Berita</a></li>
                        </ul>

                        <!-- Kategori -->
                      
                        <li class="menu-item has-sub">
                        <a href="/kategori" class="item-anchor d-flex align-item-center" data-effect="Shop">Kategori<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="/kategori" class="item-anchor"><span class="text-primary"Kategori</a></li>
                          <li><a href="/kategori" class="item-anchor">All</a></li>
                          <li><a href="/kategori" class="item-anchor">Umum</a></li>
                          <li><a href="/kategori" class="item-anchor">Study</a></li>
                          <li><a href="/kategori" class="item-anchor">Sastra</a></li>
                          <li><a href="cart.html" class="item-anchor">Fabel</a></li>
                          <li><a href="wishlist.html" class="item-anchor">Cerita</a></li>
                          <li><a href="checkout.html" class="item-anchor">Teknologi</a></li>
                        </ul>
                      </li>

                      <!-- About -->

                    <li class="menu-item has-sub">
                        <a href="/about" class="item-anchor d-flex align-item-center" data-effect="Shop">About<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="/about" class="item-anchor"><span class="text-primary">About</span></a></li>
                          <li><a href="/contact" class="item-anchor">Contact</a></li>
                          <li><a href="/faq" class="item-anchor">FAQs</a></li>
                          <li><a href="/card" class="item-anchor">Card</a></li>
                          <li><a href="/" class="item-anchor"><span class="text-primary">Log Out</span></a></li>
                        </ul>
                      </li>
                     
                      <!-- Chat -->

                      <li class="menu-item has-sub">
                        <a href="/chat" class="item-anchor d-flex align-item-center" data-effect="Blog">Chat<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="/chat" class="item-anchor">Chat</a></li>
                          <li><a href="blog-sidebar.html" class="item-anchor">Blog with sidebar</a></li>
                          <li><a href="blog-masonry.html" class="item-anchor">Blog masonry</a></li>
                          <li><a href="single-post.html" class="item-anchor">Single post</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.html" class="item-anchor" data-effect="Contact">Histori</a></li>
                    

                  <!-- Logout -->
                  
                    <li class="menu-item has-sub">
                    <a id="navbarDropdown" class="item-anchor" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}</a>
                    
                    <ul class="submenu">
                    <li><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"><a class="item-anchor" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            
                                        @csrf
                                    </form>
                            <li>
                      </li>
                    </ul>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

  