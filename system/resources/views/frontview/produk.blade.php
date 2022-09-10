@extends('template.frontview')

@section('content')
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{ url('public') }}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Fashion</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-1.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Kelinci</a></h4>
                                            <span class="aa-product-price">Rp 7.000</span><span
                                                class="aa-product-price"><del>Rp 10.000</del></span>
                                            <p class="aa-product-descrip">Kaos kaki dengan ukuran yang pendek, cocok
                                                dipakai untuk jalan-jalan maupun pergi ke kampus. Dengan detail tambahan
                                                telinga kelinci yang terletak di depan kaos kaki dan ekor kelinci
                                                dibelakang semakin membuat kaos kaki ini kelihatan menarik.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-2.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Pink</a></h4>
                                            <span class="aa-product-price">Rp 11.000</span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-3.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Lembut Kucing</a>
                                            </h4>
                                            <span class="aa-product-price">Rp 13.000</span><span
                                                class="aa-product-price"><del>Rp 15.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span
                                                class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-4.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Kucing</a></h4>
                                            <span class="aa-product-price">Rp 5.000</span><span
                                                class="aa-product-price"><del>Rp 10.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-5.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Love</a></h4>
                                            <span class="aa-product-price">Rp 5.000</span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-6.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Peach</a></h4>
                                            <span class="aa-product-price">Rp 14.000</span><span
                                                class="aa-product-price"><del>Rp 15.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-7.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Putih</a></h4>
                                            <span class="aa-product-price">Rp 5.000</span><span
                                                class="aa-product-price"><del>Rp 7.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-8.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Sweet
                                                    Strawberri</a></h4>
                                            <span class="aa-product-price">Rp 9.000</span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-9.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki</a></h4>
                                            <span class="aa-product-price">Rp 11.000</span><span
                                                class="aa-product-price"><del>Rp 13.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-10.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Motif</a></h4>
                                            <span class="aa-product-price">Rp 8.000</span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-11.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Lembut Love</a>
                                            </h4>
                                            <span class="aa-product-price">Rp 14.000</span><span
                                                class="aa-product-price"><del>Rp 16.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                </li>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                src="{{ url('public') }}/img/women/girl-12.png" alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn"href="#"><span
                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">Kaos Kaki Planet</a></h4>
                                            <span class="aa-product-price">Rp 10.000</span><span
                                                class="aa-product-price"><del>Rp 13.000</del></span>
                                            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Numquam accusamus facere iusto, autem soluta amet
                                                sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum
                                                illum.</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                            data-toggle="modal" data-target="#quick-view-modal"><span
                                                class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                </li>
                                <!-- start single product item -->
                                <li>
                                </li>
                            </ul>
                            <!-- quick view modal -->
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                            <div class="simpleLens-container">
                                                                <div class="simpleLens-big-image-container">
                                                                    <a class="simpleLens-lens-image"
                                                                        data-lens-image="{{ url('public') }}/img/view-slider/large/polo-shirt-1.png">
                                                                        <img src="{{ url('public') }}/img/view-slider/medium/polo-shirt-1.png"
                                                                            class="simpleLens-big-image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="simpleLens-thumbnails-container">
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                    data-lens-image="{{ url('public') }}/img/view-slider/large/polo-shirt-1.png"
                                                                    data-big-image="{{ url('public') }}/img/view-slider/medium/polo-shirt-1.png">
                                                                </a>
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                    data-lens-image="{{ url('public') }}/img/view-slider/large/polo-shirt-3.png"
                                                                    data-big-image="{{ url('public') }}/img/view-slider/medium/polo-shirt-3.png">
                                                                </a>

                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                    data-lens-image="{{ url('public') }}/img/view-slider/large/polo-shirt-4.png"
                                                                    data-big-image="{{ url('public') }}/img/view-slider/medium/polo-shirt-4.png">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal view content -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-content">
                                                        <h3>Kaos Kaki Kelinci</h3>
                                                        <div class="aa-price-block">
                                                            <span class="aa-product-view-price">Rp 7.000</span>
                                                            <p class="aa-product-avilability">Status Barang :
                                                                <span>Tersedia</span>
                                                            </p>
                                                        </div>
                                                        <p>Kaos kaki dengan ukuran yang pendek, cocok dipakai untuk
                                                            jalan-jalan maupun pergi ke kampus. Dengan detail tambahan
                                                            telinga kelinci yang terletak di depan kaos kaki dan ekor
                                                            kelinci dibelakang semakin membuat kaos kaki ini kelihatan
                                                            menarik.</p>
                                                        <div class="aa-prod-quantity">
                                                            <p class="aa-prod-category">
                                                                Kategori: <a href="#">Kaos Kaki Pendek</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- / quick view modal -->
                        </div>
                        <div class="aa-product-catg-pagination">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Baru-Baru Ini Dilihat</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="{{ url('public') }}/img/woman-small-3.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Kaos Kaki Karakter</a></h4>
                                            <p>Rp 9.000</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="{{ url('public') }}/img/woman-small-4.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Kaos Kaki Karakter</a></h4>
                                            <p>Rp 6.000</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="{{ url('public') }}/img/woman-small-5.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Kaos Kaki Bunga</a></h4>
                                            <p>Rp 5.000</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Produk Terlaris</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="{{ url('public') }}/img/woman-small-6.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Kaos Kaki Pink</a></h4>
                                            <p>1 x 11.00</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="{{ url('public') }}/img/woman-small-7.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Kaos Kaki Sweet Strawberri</a></h4>
                                            <p>1 x Rp 9.000</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="aa-cartbox-img"><img alt="img"
                                                src="{{ url('public') }}/img/woman-small-8.jpg"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Kaos Kaki Motif</a></h4>
                                            <p>1 x Rp 8.000</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- / product category -->
@endsection
