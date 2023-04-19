<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if (!@$description)
        $description = "Radhika Packers and Movers is one of the top and best packers and movers in Kolkata, who offers you a wide range of packing, relocation, packing and moving services at the best prices. Our Shifting plans are very much affordable for you.";
    if (!@$city) $city = "Siliguri";
    if (!@$state) $state = "West Bengal";
    if (!@$img) $img = base_url('assets') . "/img/logo/logo.png";
    $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = $url == "" ? "" : strtolower($url);
    ?>
    <meta name="description" content="<?= @$description ?>" />
    <meta name="keywords" content="<?= @$keywords ?>" />

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets") ?>/img/logo/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/odometer.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/aos.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/default.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/style.css">
    <link rel="stylesheet" href="<?= base_url("assets") ?>/css/responsive.css">
    <script src="<?= base_url("assets") ?>/js/vendor/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target"data-target="html" style="background-color:red !important;">
        <i class="fas fa-angle-up"></i>
    </button>