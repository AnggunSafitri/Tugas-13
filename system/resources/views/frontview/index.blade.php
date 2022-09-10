@extends('template.frontview')

@section('content')

<section id="aa-slider">
  <div class="aa-slider-area">
      <div id="sequence" class="seq">
          <div class="seq-screen">
              <ul class="seq-canvas">
                  <li>
                      <div class="seq-model">
                          <img data-seq src="{{ url('public') }}/img/slider/1.jpg" alt="Men slide img" />
                      </div>
                      <div class="seq-title">
                          <span data-seq>Diskon Sampai Dengan 50%</span>
                          <h2 data-seq>Koleksi Wanita</h2>
                          <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                          <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                              SEKARANG</a>
                      </div>
                  </li>
                  <li>
                      <div class="seq-model">
                          <img data-seq src="{{ url('public') }}/img/slider/2.jpg"
                              alt="Wristwatch slide img" />
                      </div>
                      <div class="seq-title">
                          <span data-seq>Hadir Dengan Diskon</span>
                          <h2 data-seq>Koleksi Terlaris</h2>
                          <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                          <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                              SEKARANG</a>
                      </div>
                  </li>
                  <li>
                      <div class="seq-model">
                          <img data-seq src="{{ url('public') }}/img/slider/3.jpg"
                              alt="Women Jeans slide img" />
                      </div>
                      <div class="seq-title">
                          <span data-seq>Koleksi Barang Terbaru</span>
                          <h2 data-seq>Koleksi Terbaru</h2>
                          <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                          <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                              SEKARANG</a>
                      </div>
                  </li>
              </ul>
          </div>
          <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
              <a type="button" class="seq-prev" aria-label="Previous"><span
                      class="fa fa-angle-left"></span></a>
              <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
          </fieldset>
      </div>
  </div>
</section>
<section id="aa-product">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="aa-product-area">
                      <div class="aa-product-inner">
                          <ul class="nav nav-tabs aa-products-tab">
                              <li class="active"><a href="#men" data-toggle="tab">Produk</a></li>
                              <li><a href="#women" data-toggle="tab">Banyak Dicari</a></li>
                              <li><a href="#sports" data-toggle="tab">Terbaru</a></li>
                              <li><a href="#electronics" data-toggle="tab">Paling Digemari</a></li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane fade in active" id="men">
                                  <ul class="aa-product-catg">
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Pink</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span><span
                                                      class="aa-product-price"><del>Rp 11.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Love</a></h4>
                                                  <span class="aa-product-price">Rp 4.000</span><span
                                                      class="aa-product-price"><del>Rp 5.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-5.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Peach</a></h4>
                                                  <span class="aa-product-price">Rp 15.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-6.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Putih</a></h4>
                                                  <span class="aa-product-price">Rp 5.000</span><span
                                                      class="aa-product-price"><del>Rp 7.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                  </ul>
                                  <a class="aa-browse-btn" href="#">Jelajahi semua Produk <span
                                          class="fa fa-long-arrow-right"></span></a>
                              </div>
                              <div class="tab-pane fade" id="women">
                                  <ul class="aa-product-catg">
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Pink</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span><span
                                                      class="aa-product-price"><del>Rp 11.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-5.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Peach</a></h4>
                                                  <span class="aa-product-price">Rp 15.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>

                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-6.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Putih</a></h4>
                                                  <span class="aa-product-price">Rp 5.000</span><span
                                                      class="aa-product-price"><del>Rp 7.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Love</a></h4>
                                                  <span class="aa-product-price">Rp 4.000</span><span
                                                      class="aa-product-price"><del>Rp 5.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                                      </li>

                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                  </ul>
                                  <a class="aa-browse-btn" href="#">Browse all Product <span
                                          class="fa fa-long-arrow-right"></span></a>
                              </div>
                              <div class="tab-pane fade" id="sports">
                                  <ul class="aa-product-catg">
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-5.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Peach</a></h4>
                                                  <span class="aa-product-price">Rp 15.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Pink</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span><span
                                                      class="aa-product-price"><del>Rp 11.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Love</a></h4>
                                                  <span class="aa-product-price">Rp 4.000</span><span
                                                      class="aa-product-price"><del>Rp 5.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-6.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Putih</a></h4>
                                                  <span class="aa-product-price">Rp 5.000</span><span
                                                      class="aa-product-price"><del>Rp 7.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-pane fade" id="electronics">
                                  <ul class="aa-product-catg">
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>

                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Kelinci</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Lembut Kucing</a></h4>
                                                  <span class="aa-product-price">Rp 13.000</span><span
                                                      class="aa-product-price"><del>Rp 15.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Pink</a></h4>
                                                  <span class="aa-product-price">Rp 10.000</span><span
                                                      class="aa-product-price"><del>Rp 11.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Love</a></h4>
                                                  <span class="aa-product-price">Rp 4.000</span><span
                                                      class="aa-product-price"><del>Rp 5.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-5.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Peach</a></h4>
                                                  <span class="aa-product-price">Rp 15.000</span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>
                                      <li>
                                          <figure>
                                              <a class="aa-product-img" href="#"><img
                                                      src="{{ url('public') }}/img/man/polo-shirt-6.png"
                                                      alt="polo shirt img"></a>
                                              <a class="aa-add-card-btn" href="#"><span
                                                      class="fa fa-shopping-cart"></span>Add To Cart</a>
                                              <figcaption>
                                                  <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                          Putih</a></h4>
                                                  <span class="aa-product-price">Rp 5.000</span><span
                                                      class="aa-product-price"><del>Rp 7.000</del></span>
                                              </figcaption>
                                          </figure>
                                          <div class="aa-product-hvr-content">
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Add to Wishlist"><span
                                                      class="fa fa-heart-o"></span></a>
                                              <a href="#" data-toggle="tooltip" data-placement="top"
                                                  title="Compare"><span class="fa fa-exchange"></span></a>
                                              <a href="#" data-toggle2="tooltip" data-placement="top"
                                                  title="Quick View" data-toggle="modal"
                                                  data-target="#quick-view-modal"><span
                                                      class="fa fa-search"></span></a>
                                          </div>
                                      </li>

                                  </ul>
                                  <a class="aa-browse-btn" href="#">Browse all Product <span
                                          class="fa fa-long-arrow-right"></span></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="aa-banner">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="aa-banner-area">
                      <a href="#"><img src="{{ url('public') }}/img/fashion-banner.jpg"
                              alt="fashion banner img"></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="aa-popular-category">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="aa-popular-category-area">
                      <ul class="nav nav-tabs aa-products-tab">
                          <li class="active"><a href="#popular" data-toggle="tab">Terlaris</a></li>
                          <li><a href="#featured" data-toggle="tab">Terbaru</a></li>
                          <li><a href="#latest" data-toggle="tab">Terakhir Dilihat</a></li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane fade in active" id="popular">
                              <ul class="aa-product-catg aa-popular-slider">
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kaos Kaki Lembut
                                                      Kucing</a></h4>
                                              <span class="aa-product-price">Rp 13.000</span><span
                                                  class="aa-product-price"><del>Rp 15.000</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-2.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                      Pink</a></h4>
                                              <span class="aa-product-price">Rp 11.000</span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                      </figure>
                                      <figcaption>
                                          <h4 class="aa-product-title"><a href="#">Kaos Kaki Kelinci</a>
                                          </h4>
                                          <span class="aa-product-price">Rp 10.000</span>
                                      </figcaption>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-3.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kaos Kaki Lembut
                                                      Kucing</a></h4>
                                              <span class="aa-product-price">Rp 13.000</span><span
                                                  class="aa-product-price"><del>Rp 15.000</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                      Pink</a></h4>
                                              <span class="aa-product-price">Rp 10.000</span><span
                                                  class="aa-product-price"><del>Rp 11.000</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-4.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                      Kucing</a></h4>
                                              <span class="aa-product-price">Rp 5.000</span><span
                                                  class="aa-product-price"><del>Rp 10.000</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kaos Kaki
                                                      Love</a></h4>
                                              <span class="aa-product-price">Rp 4.000</span><span
                                                  class="aa-product-price"><del>Rp 5.000</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Kakos Kaki
                                                      Kelinci</a></h4>
                                              <span class="aa-product-price">Rp 10.000</span><span
                                                  class="aa-product-price"><del>Rp 11.000</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                                  </li>
                              </ul>
                              <a class="aa-browse-btn" href="#">Jelajahi Semua Produk<span
                                      class="fa fa-long-arrow-right"></span></a>
                          </div>

                          <div class="tab-pane fade" id="featured">
                              <ul class="aa-product-catg aa-featured-slider">
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-3.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                      doller</a></h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                      </figure>
                                      <figcaption>
                                          <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                          <span class="aa-product-price">$45.50</span>
                                      </figcaption>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-2.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                      doller</a></h4>
                                              <span class="aa-product-price">$45.50</span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                  </li>

                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-4.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                      doller</a></h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">This is Title</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                                  </li>
                              </ul>
                              <a class="aa-browse-btn" href="#">Browse all Product <span
                                      class="fa fa-long-arrow-right"></span></a>
                          </div>

                          <div class="tab-pane fade" id="latest">
                              <ul class="aa-product-catg aa-latest-slider">

                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-4.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                      doller</a></h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-4.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">This is Title</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                              </h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-2.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                      doller</a></h4>
                                              <span class="aa-product-price">$45.50</span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/man/t-shirt-1.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                      </figure>
                                      <figcaption>
                                          <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                          <span class="aa-product-price">$45.50</span>
                                      </figcaption>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                  </li>
                                  <li>
                                      <figure>
                                          <a class="aa-product-img" href="#"><img
                                                  src="{{ url('public') }}/img/women/girl-3.png"
                                                  alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#"><span
                                                  class="fa fa-shopping-cart"></span>Add To Cart</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                      doller</a></h4>
                                              <span class="aa-product-price">$45.50</span><span
                                                  class="aa-product-price"><del>$65.50</del></span>
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                          <a href="#" data-toggle="tooltip" data-placement="top"
                                              title="Compare"><span class="fa fa-exchange"></span></a>
                                          <a href="#" data-toggle2="tooltip" data-placement="top"
                                              title="Quick View" data-toggle="modal"
                                              data-target="#quick-view-modal"><span
                                                  class="fa fa-search"></span></a>
                                      </div>
                                  </li>
                              </ul>
                              <a class="aa-browse-btn" href="#">Browse all Product <span
                                      class="fa fa-long-arrow-right"></span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="aa-support">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="aa-support-area">
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="aa-support-single">
                          <span class="fa fa-truck"></span>
                          <h4>Pengantaran Paket Cepat</h4>
                          <P>Pesanan Anda Akan Dikirim Dihari Yang Sama.</P>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="aa-support-single">
                          <span class="fa fa-clock-o"></span>
                          <h4>Pengemasan Paket Cepat</h4>
                          <P>Pesanan Anda Akan Dikemas Dalam Waktu 1x24 Jam.</P>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="aa-support-single">
                          <span class="fa fa-phone"></span>
                          <h4>Admin Aktif 24 Jam</h4>
                          <P>Jika Ada Kendala dan Pertanyaan Silahkan Chat Admin.</P>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section id="aa-testimonial">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="aa-testimonial-area">
                  <ul class="aa-testimonial-slider">
                      <li>
                          <div class="aa-testimonial-single">
                              <img class="aa-testimonial-img"
                                  src="{{ url('public') }}/img/testimonial-img-2.jpg" alt="testimonial img">
                              <span class="fa fa-quote-left aa-testimonial-quote"></span>
                              <p>Produk di toko ini mempunyai kualitas yang baik.</p>
                              <div class="aa-testimonial-info">
                                  <p>Angga Yunanda</p>
                                  <span>Desainer</span>
                                  <a href="#">angga.com</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="aa-testimonial-single">
                              <img class="aa-testimonial-img"
                                  src="{{ url('public') }}/img/testimonial-img-1.jpg" alt="testimonial img">
                              <span class="fa fa-quote-left aa-testimonial-quote"></span>
                              <p>Admin tokonya cantik banget dan juga ramah.</p>
                              <div class="aa-testimonial-info">
                                  <p>Jefri Nichol</p>
                                  <span>Artis</span>
                                  <a href="#">jeff.real</a>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="aa-testimonial-single">
                              <img class="aa-testimonial-img"
                                  src="{{ url('public') }}/img/testimonial-img-3.jpg" alt="testimonial img">
                              <span class="fa fa-quote-left aa-testimonial-quote"></span>
                              <p>Belanja disini dijamin kalian akan mendapatkan kaos kaki yang cantik.</p>
                              <div class="aa-testimonial-info">
                                  <p>Michelle Ziudith</p>
                                  <span>CEO</span>
                                  <a href="#">PT.MZ</a>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="aa-latest-blog">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="aa-latest-blog-area">
                  <h2>Terakhir Disukai</h2>
                  <div class="row">
                      <div class="col-md-4 col-sm-4">
                          <div class="aa-latest-blog-single">
                              <figure class="aa-blog-img">
                                  <a href="#"><img src="{{ url('public') }}/img/promo-banner-1.jpg"
                                          alt="img"></a>
                                  <figcaption class="aa-blog-img-caption">
                                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                      <span href="#"><i class="fa fa-clock-o"></i>1 APRIL 2022</span>
                                  </figcaption>
                              </figure>
                              <div class="aa-blog-info">
                                  <h3 class="aa-blog-title"><a href="#">Kaos Kaki Lembut Kucing</a></h3>
                                  <p>Kaos kaki dengan bahan lembut di tambah dengan hiasan berbentuk kucing yang
                                      ada di bagian sampingnya.</p>
                                  <a href="#" class="aa-read-mor-btn">Read more <span
                                          class="fa fa-long-arrow-right"></span></a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="aa-latest-blog-single">
                              <figure class="aa-blog-img">
                                  <a href="#"><img src="{{ url('public') }}/img/promo-banner-3.jpg"
                                          alt="img"></a>
                                  <figcaption class="aa-blog-img-caption">
                                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                      <span href="#"><i class="fa fa-clock-o"></i>3 JUNI 2022</span>
                                  </figcaption>
                              </figure>
                              <div class="aa-blog-info">
                                  <h3 class="aa-blog-title"><a href="#">Kaos Kaki Sweet Strawberri</a>
                                  </h3>
                                  <p>Kaos kaki dengan panjang di atas mata kaki yang menggunakan bahan
                                      berkualitas, dengan 3 pilihan desain yang menarik.</p>
                                  <a href="#" class="aa-read-mor-btn">Read more <span
                                          class="fa fa-long-arrow-right"></span></a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                          <div class="aa-latest-blog-single">
                              <figure class="aa-blog-img">
                                  <a href="#"><img src="{{ url('public') }}/img/promo-banner-2.jpg"
                                          alt="img"></a>
                                  <figcaption class="aa-blog-img-caption">
                                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                      <span href="#"><i class="fa fa-clock-o"></i>1 AGUSTUS 2022</span>
                                  </figcaption>
                              </figure>
                              <div class="aa-blog-info">
                                  <h3 class="aa-blog-title"><a href="#">Kaos Kaki Planet</a></h3>
                                  <p>Kaos kaki dengan gambar planet saturnus yang cantik dan desain yang elegan,
                                      akan membuat penampilan anda menjadi lebih menarik lagi setelah menggunakan
                                      kaos kaki ini.</p>
                                  <a href="#" class="aa-read-mor-btn">Read more <span
                                          class="fa fa-long-arrow-right"></span></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="aa-subscribe">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="aa-subscribe-area">
                  <h3>Ikuti Berita Terbaru Daily Shop</h3>
                  <p>Dengan Mengikutinya Anda Akan Menerima Berita Terbaru Dari Kami</p>
                  <form action="" class="aa-subscribe-form">
                      <input type="email" name="" id=""
                          placeholder="Silahkan Masukkan Email">
                      <input type="submit" value="Subscribe">
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
    
@endsection