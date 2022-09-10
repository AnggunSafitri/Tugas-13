<header id="aa-header">
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <div class="aa-header-top-left">
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    
                                    <li><a href="{{ url('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <div class="aa-logo">
                                <a href="index.html">
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>Shop<strong>Pink</strong> <span>Kebutuhan Anda Nomor 1</span></p>
                                </a>
                            </div>
                            <div class="aa-cartbox">
                                <a class="aa-cart-link" href="#">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span class="aa-cart-notify">2</span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img
                                                    src="{{ url('public') }}/img/woman-small-2.jpg"
                                                    alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">Kaos Kaki Beruang</a></h4>
                                                <p>Rp 9.000</p>
                                            </div>
                                            <a class="aa-remove-product" href="#"><span
                                                    class="fa fa-times"></span></a>
                                        </li>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img
                                                    src="{{ url('public') }}/img/woman-small-1.jpg"
                                                    alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4><a href="#">Kaos Kaki Lembut</a></h4>
                                                <p>Rp 7.000</p>
                                            </div>
                                            <a class="aa-remove-product" href="#"><span
                                                    class="fa fa-times"></span></a>
                                        </li>
                                        <li>
                                            <span class="aa-cartbox-total-title">
                                                Total
                                            </span>
                                            <span class="aa-cartbox-total-price">
                                                Rp 16.000
                                            </span>
                                        </li>
                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                                </div>
                            </div>
                            <div class="aa-search-box">
                                <form action="">
                                    <input type="text" name="" id=""
                                        placeholder="Search here ex. 'man' ">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/web') }}">Home</a></li>
                        <li><a href="{{ url('produk') }}">Produk</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>