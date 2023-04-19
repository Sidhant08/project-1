
<div class="breadcrumb-area breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="breadcrumb-content">
				<h1>Graphic Design in <?= $city ?></h1>
				<ul>
					<li><a href="<?= site_url() ?>">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li>Graphic Design in <?= $city ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="our-service-page w100-l fixed-padding">
	<div class="container pb-100" style="padding-top:70px">
		<div class="row">
			<div class="col-sm-8">
				<h2>Best Graphic Design in <?= $city ?></h2>
				<div class="row">
					<div class="col-sm-8">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, fugit maiores. Explicabo neque eum vero ipsa cupiditate fuga, voluptas tempora labore doloremque corporis eligendi dolor sit, non nulla iusto qui.
						</p>
					</div>
					<div class="col-sm-4">
						<img src="<?= base_url("assets/img/images/img10.png") ?>"
							alt="Mysite in <?= $city ?>" class="img-responsive img-thumbnail">
					</div>
				</div>

				<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci neque eius iste minus aliquid, voluptates animi necessitatibus doloremque facilis illum cum consequuntur corrupti laboriosam libero non eum dolore! Deleniti, error. </p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sint ipsum quidem, recusandae ullam sequi modi ratione ut minus, neque totam sit quibusdam repellendus repudiandae debitis temporibus autem! Iste, laboriosam.
				</p>

			</div>
			<br><br>
			<div class="col-sm-4">
				<?php echo $this->load->view('contacts/quoteform') ?>
			</div>
		</div>
		<div class="text-center">
			<?php $this->load->view('template/call_widget') ?>
			<?php include 'city_links.php'; ?>
			<br>
		</div>
	</div>

</div>
</div>