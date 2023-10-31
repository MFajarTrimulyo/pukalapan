<!-- Kategori-full display -->
<section id="selling-products" class="product-store bg-light-grey padding-large">
      <div class="container">

      <!-- Kategori -->
        <div class="section-header">
          <h2 class="section-title">Kategori Buku</h2>
        </div>
        <ul class="tabs list-unstyled">
        @foreach ($kategoris as $kategori)
          <li data-tab-target="#all" class="active tab">{{ $kategori->nama_kategori }}</li>
        @endforeach
        </ul>

        <!-- Prduct -->

        <div class="tab-content">
          <div id="all" data-tab-content class="active">
            <div class="row d-flex flex-wrap">
            @foreach ($bukus as $buku)
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                  <img src="{{ asset('/storage/bukus/' . $buku->foto) }}" alt="Books" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
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
                    <a href="single-product.html">{{ $buku->judul_buku }}</a>
                  </h3>
                  <div class="item-price text-primary"><span>Stock :{{ $buku->stock }}<span></div>
                </div>
              </div>
              @endforeach 
            </div>
             
          </div>
        </div>
      </div>
    </section>