<?php $this->load->view('contacts/quotemodal.php') ?>
<footer>
    <div class="container">
        <div class="container-inner-wrap">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="content">
            <div class="left box">
                <div class="upper">
                    <div class="topic">Address</div>
                    <div class="fw-title">
                        <address style="color:#fff">Border Road 4/5, Maharaj Colony,
                            Ward No. IV,<br> Mahananda Para,
                            Siliguri, West Bengal-734005
                        </address>
                    </div>
                </div>
                <div class="lower">
                    <div class="topic">Contact us</div>
                    <div class="phone">
                        <a href="#"><i class="fas fa-phone-volume"></i>
                            <?= $phone1html ?> <br>
                                <div style="padding-left: 65px;">
                                    <?= $phone2html ?>
                                </div>
                        </a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>
                            <?= $email1 ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="middle box">
                <div class="topic">Our Services</div>
                <ul>
                    <li><a href="<?= site_url("frontend-in-siliguri") ?>">Frontend</a>
                    </li><br>
                    <li><a href="<?= site_url("backend-in-siliguri") ?>">Backend</a></li><br>
                    <li><a href="<?= site_url("web-design-in-siliguri") ?>">Web Design</a></li><br>
                    <li><a href="<?= site_url("ui-ux-in-siliguri") ?>">UI/UX Design</a></li><br>
                    <li><a href="<?= site_url("graphic-design-in-siliguri") ?>">Graphic Design</a></li><br>
                    <li><a href="<?= site_url("software-in-siliguri") ?>">Software developer</a></li><br>
                </ul>
            </div>

            <div class="right box">
                <div class="topic">About Company</div>
                <ul>
                    <li style="padding-bottom: 7px;"><a href="<?= site_url("about/testimonials") ?>">Testimonials</a>
                    </li><br>
                    <li style="padding-bottom: 7px;"><a href="<?= site_url("about/faq") ?>">FAQs</a></li><br>
                    <li style="padding-bottom: 7px;"><a href="<?= site_url("about/about") ?>">About Us</a></li><br>
                    <li style="padding-bottom: 7px;"><a href="<?= site_url("contacts") ?>">Contact Us</a></li><br>
                    <!-- <li><a style="border-radius: 50px; color: white; font-weight: 600; background-color: #6f1a00;"
                            class="btn" data-toggle="modal" data-target="#qteModal"><i class="far fa-paper-plane"></i>
                            BOOK NOW
                            <span></span></a></li> -->
                </ul>
                <div class="media-icons">
                    <a href="https://www.facebook.com/sidhant.tamang.1"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/sidhant_bomzon/"><i class="fab fa-instagram"></i></a>
                    <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                    <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                    <a href="https://www.linkedin.com/in/sidhant-tamang-91544225a/"><i class="fab fa-linkedin-in"></i></a>
                </div>
                </form>
            </div>
            <div class="bottom" style="border-top: 1px solid black; margin-top: 10px;">
                <p class=" text-center" style="padding-top: 20px;color: #ffffff;">Copyright &copy; <?= date("Y") ?>
                        <b>My Pesonal Site</b>. All Rights Reserved.</p>
            </div>
        </div>

</footer>
<script src="<?= base_url("assets") ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url("assets") ?>/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url("assets") ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url("assets") ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url("assets") ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url("assets") ?>/js/jquery.odometer.min.js"></script>
<script src="<?= base_url("assets") ?>/js/jquery.appear.js"></script>
<script src="<?= base_url("assets") ?>/js/slick.min.js"></script>
<script src="<?= base_url("assets") ?>/js/ajax-form.js"></script>
<script src="<?= base_url("assets") ?>/js/wow.min.js"></script>
<script src="<?= base_url("assets") ?>/js/aos.js"></script>
<script src="<?= base_url("assets") ?>/js/plugins.js"></script>
<script src="<?= base_url("assets") ?>/js/main.js"></script>
</body>

</html>