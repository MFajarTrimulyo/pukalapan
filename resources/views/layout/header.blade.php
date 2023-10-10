<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{asset ('css/header.css') }}" />

  </head>
  <body>
    

    <!-- Conten SMKN 8 -->
    <div class="conten">
      <div class="frame">
        <div class="frame-wrapper">
          <div class="div-wrapper">
            <div class="div">
              <div class="badge-group">
                <div class="badge">
                  <div class="badge-base"><div class="text">APPS</div></div>
                </div>
                <div class="div-2"><div class="message">SMK8 Production</div></div>
              </div>
              <div class="frame-2">
                <img class="united-states-daniel" src="img/united-states-daniel-mcr-01-1.svg" />
                <div class="text-wrapper">English</div>
                <img class="chevron-down" src="img/image.svg" />
              </div>
            </div>
          </div>
        </div>

        <!-- Conten Logo dan NAVBAR -->
        <div class="header-section">
          <div class="container">
            <div class="header-wrapper">
              <header class="header">
                <div class="frame-3">
                  <div class="logomark">
                    <div class="overlap-group">
                      <div class="isometric-square"></div>
                      <div class="isometric-square-2"></div>
                    </div>
                  </div>
                  <div class="text-wrapper-2">Pukalapan</div>
                </div>
          
                  <!-- SEARCH Bar -->

                  <div class="search">
                      <form class="search-form" action="{{ route('search') }}" method="GET">
                          <input type="text" name="query" placeholder="Cari...">
                          <button type="submit">Cari</button>
                      </form>
                  </div>
                <div class="div-2">
                  <div class="featured-icon"><img class="img-2" src="img/heart.svg" /></div>
                  <div class="featured-icon"><img class="img-2" src="img/user-02.svg" /></div>
                  <div class="featured-icon"><img class="img-2" src="img/shopping-bag-02.svg" /></div>
                </div>
              </header>
            </div>
          </div>
        </div>  
        
        <div class="frame-6">
          <div class="component"><img class="icon-menu" src="{{asset ('Icon/icon-menu.png') }}" /></div>
          <div class="img-wrapper"><img class="img-3" src="{{asset ('Icon/icon-menu.png') }}/></div>
          <div class="frame-7">
          <button>
            <div class="frame-8">
            <div class="group"><img class="icon-book" src="{{asset ('Icon/icon_book_.png')}}"/>
              <div class="text-wrapper-4">All Kategori</div></div>
            </div>
            </button>
            <div class="frame-9">
              <div class="group"><button class="button" img class="icon-book" src="img/icon-book.png"></button></div>
              <label class="text-wrapper-4" for="button">Buku Paket
            </div>
            <div class="frame-9">
              <div class="group"><img class="icon-book" src="img/icon-book-3.png" /></div>
              <div class="text-wrapper-4">Buku cerita</div>
            </div>
            <div class="frame-9">
              <div class="group"><img class="icon-book" src="img/icon-book-2.png" /></div>
              <div class="text-wrapper-4">Buku Motivasi</div>
            </div>
            <div class="frame-9">
              <div class="history-icon-wrapper"><img class="history-icon" src="img/history-icon-1.png" /></div>
              <div class="text-wrapper-4">Histori</div>
            </div>
            <div class="frame-9">
              <div class="icon-comment-square-wrapper">
                <img class="icon-comment-square" src="img/icon-comment-square.png" />
              </div>
              <div class="text-wrapper-4">Chat</div>
            </div>
          </div>
          <div class="img-wrapper"><img class="img-3" src="img/chevron-right.svg" /></div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
