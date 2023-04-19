<script>
    $(function () {
        $('#submitbtn3').click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/add') ?>",
                data: $("#newsform").serialize(),
                beforeSend: function () {
                    $('#result3').html(
                        '<img src="<?php echo base_url() ?>assets/img/ajax-loaders/ajax-loader-4.gif" /><br><br> '
                    );
                },
                success: function (data) {
                    $('#result3').empty();
                    $('#result3').html(data);
                }
            });
        });
    });
</script>


<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="<?= site_url() ?>">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="our-service-page w100-l fixed-padding">
    <div class="container" style="padding-top:70px;padding-bottom:0px">
        <div class="text-center">
            <h2>Reach Us</h2>
        </div>
        <br>
        <div class="row">

            <div class="col-sm-6 contactlink">
                <div>
                    <h4>Office Address</h4><br>
                </div>
                <div>
                    <address>
                        Border Road 4/5, Maharaj Colony, Ward No. IV,<br>
                        Mahananda Para, Siliguri, West Bengal-734005
                    </address>
                    <p>
                        <?= $phone1html ?>
                            <p><span style="position: absolute; top: 145px;">
                                    <?= $phone2html ?>
                                </span><br>

                                Timing: <b>10:00AM - 09:00PM</b><br>
                                <?= $email1 ?>
                            </p>
                </div>
                <div class="footer-about-social-icon pb-30">
                    <ul style="margin-top: 0px;">
                        <li>
                            <span><a href="" target="_blank"><i class="fab fa-facebook-f"
                                        style="font-size: 25px; margin: 4px;"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"
                                        style="font-size: 25px; margin: 4px;"></i></a></span>
                            <span><a href="#"><i class="fab fa-pinterest"
                                        style="font-size: 25px; margin: 4px;"></i></a></span>
                            <span><a href="#"><i class="fab fa-linkedin-in"
                                        style="font-size: 25px; margin: 4px;"></i></a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center">
                    <h4>Contact Form</h4>
                </div>
                <form method="post" id="newsform" onsubmit="return false" class="row contact-form">
                    <div class="col-sm-6 form-group">
                        <input type="text" name="name" placeholder="Full Name" class="form-control">
                    </div>
                    <div class="col-sm-6 form-group">
                        <input type="tel" name="phone" placeholder="Phone Number" class="form-control">
                    </div>
                    <div class="col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="col-sm-12 form-group">
                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <div id="result3"></div>
                        <button id="submitbtn3" type="submit" class="wpcf7-form-control wpcf7-submit btn btn-primary"
                            style="width:100%;">SUBMIT NOW</button>
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>