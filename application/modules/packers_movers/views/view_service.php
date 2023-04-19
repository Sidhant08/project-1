<?php
// $this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'state_language.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
	include "data/$st.php";
} else {
	redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
	if (@$ct['nm'] == $city) {
		$lat = $ct['lat'];
		$lon = $ct['lon'];
		$state_code = $ct['sc'];
		break;
	}
}

$content = array(
	array(
		"head" => "<h2>Home Shifting in $city</h2>",
		"link" => "home-shifting-in-$ctlink",
		"img" => 'home1.jpeg',
		"content" => "<p>Shifting to a new place may be hectic and hard but our company Radhika Cargo Packers and Movers provides the <b>best packing and moving service</b>. We take our customers' possessions and pack them properly with <i>high quality packing products</i>.</p>

			<p>To keep the household belongings safe while transport, our professionals will pack your belongings in a special manner. Radhika Cargo Packers and Movers is the <b>best shifting company</b> in $city. From $city to all over India Radhika Cargo Packers and Movers provides services.</p>"
	),

	array(
		"head" => "<h2>Office Shifting in $city</h2>",
		"link" => "office-shifting-in-$ctlink",
		"img" => 'office.jpg',
		"content" => "<p>Radhika Cargo Packers and Movers not only offers home shifting service but our company also provides <b>office shifting services</b>. Our professional workers will provide all the possible help with office shifting.</p> 

			</p>While shifting an office our professional workers will take care of your belongings, from <b>packing to unpacking and loading to unloading</b> our professionals will help you take care of all your belongings.</p>"
	),

	array(
		"head" => "<h2>Car Transportation in $city</h2>",
		"link" => "car-transportation-in-$ctlink",
		"img" => 'car.jpeg',
		"content" => "<p>Transporting your car or your vehicle to another city is now easier with Radhika Cargo Packers and Movers. Our very esteemed trained professionals will help you transport your car. Radhika cargo Packers and Movers will help you with the <b>easy transport and shipping process</b>.</p>

			<p>Our company provides our <b>safe transport vehicle</b> and our own safe warehouse for your car to be safe with us. Before packing your car for shipping we do a thorough servicing of your vehicle for more safety measures.</p>"

	),

	array(
		"head" => "<h2>Bike Transportation in $city</h2>",
		"link" => "bike-transportation-in-$ctlink",
		"img" => 'bike1.png',
		"content" => "<p>Radhika Cargo Packers and Movers is the <b>best transport company</b> in $city. Our company transports bikes and vehicles to different parts of India. Make your bike transport easy with Radhika Cargo Packers and Movers.</p> 

			<p>Our company offers many different services like from packing to loading and unloading your bike at your doorstep. Radhika Cargo Packers and Movers offers our company's safe transport vehicle to transport your bike and a <b>safe warehouse</b> to keep your bike safe.</p>"
	)
);

$content1 = array(
	array(
		"head" => "<h2>Storage and Warehousing in $city</h2>",
		"link" => "$ctlink-warehouse",
		"img" => 'w1.jpg',
		"content" => "<p>Radhika Cargo Packers and Movers offers a warehouse for safe storage to our customers. We have many storage warehouse facilities for storing your belongings safely for the time being.</p
		<p>Radhika Cargo Packers and Movers offers a huge warehouse and our professional workers will help you to store and keep your belongings safe with us</p>"
	),

	array(
		"head" => "<h2>Packing and Unpacking in $city</h2>",
		"link" => "$ctlink-packing-unpacking",
		"img" => 'packing1.jpeg',
		"content" => "<p>Radhika Cargo Packers and Movers not only do packing and shipping but also offer the packing services for factories or storage packing. Radhika Cargo Packers and Movers offers many services to our dear customers. Our company offers all the packing deals like storehouse packing, factory packing etc.</p>
		
		<p>Any kind of packing and moving related services are offered by Radhika Cargo Packers and Movers. Our very professional workers will help you pack all your belongings.</p>"
	),

	array(
		"head" => "<h2>Goods Insurance in $city</h2>",
		"link" => "goods-insurance",
		"img" => 'insurance.jpg',
		"content" => "<p>Radhika Cargo Packers and Movers approves an insurance policy that is fully valid till your parcel arrives at your destination. We value our customers and their belongings, the safety of your belongings is our company's policy.</p>
		
		<p>Our company offers the quick and stress free claims of your insurance policy. Radhika Cargo Packers and Movers will provide you the safe delivery but in case of any incident or damage done to your belongings our company will provide the full proof insurance policy for our customers.</p>"
	),

	array(
		"head" => "<h2>Loading and Unloading in $city</h2>",
		"link" => "$ctlink-loading-unloading",
		"img" => 'loading2.jpg',
		"content" => "<p>Radhika Cargo Packers and Movers approves an insurance policy that is fully valid till your parcel arrives at your destination. We value our customers and their belongings, the safety of your belongings is our company's policy.</p>
		
		<p>Our company offers the quick and stress free claims of your insurance policy. Radhika Cargo Packers and Movers will provide you the safe delivery but in case of any incident or damage done to your belongings our company will provide the full proof insurance policy for our customers.</p>"
	)
);

shuffle($content);
shuffle($content1);
	?>

<style>
	.btn-link {
		margin: -19px 0px 10px -12px
	}
</style>
<div class="breadcrumb-area breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="breadcrumb-content">
				<h1>Packers and Movers in <?= $city ?>
				</h1>
				<ul>
					<li><a href="<?= site_url() ?>">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><a href="packers-movers/state_services/west-bengal">
							<?=@$state ?>
								Packers
						</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li>
						<?=@$city ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="our-service-page w100-l fixed-padding">
	<div class="container" style="padding-top: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h2>Radhika Cargo Packers and Movers in <?= $city ?>
				</h2>
				<button class="btn btn-primary btn-sm" data-target="#qteModal" data-toggle="modal">Request a
					Quote</button><br><br>
				<p>
					Radhika Cargo Packers and Movers provide packing and moving services all over <?= $city ?>. We offer
						our professionals to shift your belongings and we also provide our companies own safe transport
						vehicles and warehouses to settle your belongings safely.
				</p>

				<p>
					Radhika Cargo Packers and Movers is the <b>best packing and moving company</b> in <?= $city ?>. Our customers have
						much appreciated our work and have given us the best reviews. Our company Radhika Cargo Packers
						and Movers offers the best discount prices and will take 100% guarantee of your belongings.
				</p>
			</div>
		</div>
		<?php
        $rand = 0;
        for ($i = 0; $i < sizeof($content); $i++) {
        ?>
		<div class="row pb-20">
			<?php
	        //to alter img position dynamically
        	$col = (@$content[$i]['img']) ? '8' : '12';
	        $size = strlen($city);
	        if ($rand == 0) {
		        if ($size % 2 == '0')
			        $rand = 2;
		        else
			        $rand = 1;
	        } else {
		        $rand = ($rand == 1) ? 2 : 1;
	        }
            ?>
			<?php if (@$content[$i]['img'] && $rand == 2) { ?>
			<div class="col-sm-4">
				<img src="<?= base_url("assets/img/images/" . $content[$i]['img']) ?>"
					alt="<?=@strip_tags($content[$i]['head']) ?>" loading="lazy" class="img-fluid">
			</div>
			<?php } ?>
			<div class="col-sm-<?=@$col ?>">
				<a href="<?=@$content[$i]['link'] ?>">
					<?=@$content[$i]['head'] ?>
				</a>
				<?=@$content[$i]['content'] ?>
					<br>
			</div>
			<?php if (@$content[$i]['img'] && $rand == 1) { ?>
			<div class="col-sm-4">
				<img src="<?= base_url("assets/img/images/" . $content[$i]['img']) ?>"
					alt="<?=@strip_tags($content[$i]['head']) ?>" loading="lazy" class="img-fluid">
			</div>
			<?php } ?>
		</div>
		<?php } ?><br>

		<?php
        $rand = 0;
        for ($i = 0; $i < sizeof($content1); $i++) {
        ?>
		<div class="row pb-20">
			<?php
	        //to alter img position dynamically
        	$col = (@$content1[$i]['img']) ? '8' : '12';
	        $size = strlen($city);
	        if ($rand == 0) {
		        if ($size % 2 == '0')
			        $rand = 2;
		        else
			        $rand = 1;
	        } else {
		        $rand = ($rand == 1) ? 2 : 1;
	        }
            ?>
			<?php if (@$content1[$i]['img'] && $rand == 2) { ?>
			<div class="col-sm-4">
				<img src="<?= base_url("assets/img/images/" . $content1[$i]['img']) ?>"
					alt="<?=@strip_tags($content1[$i]['head']) ?>" loading="lazy" class="img-fluid">
			</div>
			<?php } ?>
			<div class="col-sm-<?=@$col ?>">
				<a href="<?=@$content1[$i]['link'] ?>">
					<?=@$content1[$i]['head'] ?>
				</a>
				<?=@$content1[$i]['content'] ?>
					<br>
			</div>
			<?php if (@$content1[$i]['img'] && $rand == 1) { ?>
			<div class="col-sm-4">
				<img src="<?= base_url("assets/img/images/" . $content1[$i]['img']) ?>"
					alt="<?=@strip_tags($content1[$i]['head']) ?>" loading="lazy" class="img-fluid">
			</div>
			<?php } ?>
		</div>
		<?php } ?><br>

		<?php $this->load->view('template/call_widget') ?>
		<button class="btn btn-primary btn-sm" data-target="#qteModal" data-toggle="modal">Request a
			Quote</button><br><br>
	</div>