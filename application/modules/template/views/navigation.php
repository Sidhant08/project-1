<header>
    <div class="header-top-wrap">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <?= $phone1html ?>
                            </li>
                            <li>
                                <?= $phone2html ?>
                            </li>
                            <li>
                                <?= $email1 ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5  d-none d-md-block">
                    <div class="header-top-right">
                        <ul>
                            <li class="header-time"><i class="far fa-clock"></i> <b>Mon - Sat:</b> 10:00am - 09.00pm
                            </li>
                            <li class="header-social">
                                <span>Follow :</span>
                                <a href="https://www.facebook.com/sidhant.tamang.1"><i class="fab fa-facebook-f"></i></a>
                                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                                <a href="https://www.instagram.com/sidhant_bomzon/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/sidhant-tamang-91544225a/"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sticky-header" class="main-header menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="mobilelogo" href="<?= site_url() ?>"><img
                            src="<?= base_url("assets") ?>/img/logo/logo.png" loading="lazy" alt="my site logo"
                            style="position:absolute; top: -18px; z-index: 2; height:100px;"></a>
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">

                            <div class="navbar-wrap main-menu d-none d-lg-flex" style="z-index: 999;">
                                <div class="logo">
                                    <a href="<?= site_url() ?>"><img src="<?= base_url("assets") ?>/img/logo/logo.png"
                                    loading="lazy" alt="my site logo"
                                            style="position:absolute; top: -6px; z-index: 2; height:100px;"></a>
                                </div>
                                <ul class="navigation">
                                    <li class="active"><a href="<?= site_url('/') ?>">Home</a></li>

                                    <!-- <li><a
                                            href="<?= site_url("packers-movers/state_services/west-bengal") ?>">Branch</a>
                                    </li> -->

                                    <li class="menu-item-has-children"><a href="#">Services</a>
                                        <ul class="submenu">
                                            <li><a href="<?= site_url("frontend-in-siliguri") ?>">FRONTEND</a>
                                            </li>
                                            <li><a href="<?= site_url("backend-in-siliguri") ?>">BACKEND</a></li>
                                            <li><a href="<?= site_url("web-design-in-siliguri") ?>">WEB DESIGN</a></li>
                                            <li><a href="<?= site_url("ui-ux-in-siliguri") ?>">UI/UX DESIGN</a></li>
                                            <li><a href="<?= site_url("graphic-design-in-siliguri") ?>">GRAPHIC DESIGN</a></li>
                                            <li><a href="<?= site_url("software-in-siliguri") ?>">SOFTWARE DEVELOPER</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">About</a>
                                        <ul class="submenu">
                                            <li><a href="<?= site_url("about") ?>">About Company</a></li>
                                            <li><a href="<?= site_url("about/testimonials") ?>">Testimonials</a></li>
                                            <li><a href="<?= site_url("about/why_choose_us") ?>">Why Choose Us</a></li>
                                            <li><a href="<?= site_url("about/faq") ?>">Frequently Asked Questions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= site_url("contacts") ?>">Contact</a></li>
                                    <li class="header-btn" style="margin-top: 22px;"><button class="btn" data-toggle="modal"
                                            data-target="#qteModal">Get A Quote</button></li>
                                </ul>
                            </div>
                             <div class="header-action d-none d-md-block" style="padding-bottom: 0px;">
                                <ul>
                                    
                                    
                                </ul>
                            </div> 
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo"><a href="index.html"><img
                                        src="<?= base_url("assets") ?>/img/logo/logo.png" loading="lazy" alt="my site logo"
                                        title="Logo"></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <!-- <li><a href="#"><span class="fab fa-twitter"></span></a></li> -->
                                    <li><a href="https://www.facebook.com/sidhant.tamang.1"><span class="fab fa-facebook-square"></span></a></li>
                                    <!-- <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> -->
                                    <li><a href="https://www.instagram.com/sidhant_bomzon/"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/sidhant-tamang-91544225a/"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-search -->
    <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="search-close">
            <span><i class="fas fa-times"></i></span>
        </div>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">... Search Here ...</h2>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Type keywords here">
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>