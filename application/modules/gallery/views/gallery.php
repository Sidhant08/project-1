<style>
.portfolio-thumb img{height:300px}
</style>
<div class="breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="breadcumb-content">
					<h1>Gallery</h1>
					<ul>
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li>Glimpses</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="portfolio-section pt-80 pb-75">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-head text-center pb-55">
						<h5>Our Gallery</h5>
						<span class="section-head-bar-2"></span>
					</div>
				</div>
			</div>
			<div class="row image_load">
			<?php for ($i=1;$i<=29;$i++){?>
			
				<div class="col-lg-3 col-md-6 col-sm-12 p-0 grid-item design cemes">
					<div class="single_portfolio">
						<div class="portfolio-thumb">
							<img src="<?=base_url()?>assets/img/gallery/<?=$i?>.jpg" alt="devika packers">
							<div class="portfolio-icon" >
								<div class="port-icon">
									<a class="port-icon venobox vbox-item" data-gall="myportfolio" href="<?=base_url()?>assets/img/gallery/<?=$i?>.jpg"><i class="fas fa-image"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
			</div>
		</div>
	</div>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/venobox.css?v=3.5" type="text/css" media="all" />
	<script src="<?=base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?=base_url()?>assets/js/venobox.js"></script>
	<script src="<?=base_url()?>assets/js/venobox.min.js"></script>
	<script>
	 /* Portfolio Isotope  */
   
                
    // Venubox
    $('.venobox').venobox({
        numeratio: true,
        infinigall: true
    });
	</script>