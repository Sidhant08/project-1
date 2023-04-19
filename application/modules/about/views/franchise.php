<style>
.breadcumb-area {background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url(<?=base_url("assets")?>/img/franchiseb.png) no-repeat center/cover;}
</style>
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="breadcumb-content">
				<h1>Franchise <small>Om Packers and Movers</small></h1>
				<ul>
					<li><a href="<?=site_url()?>">Home</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li>Franchise</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="our-service-page w100-l fixed-padding">
	<div class="container" style="padding-top:70px"> 
        <div class="row">
            <div class="col-sm-12">
                <h2>Become our Partner</h2>
                <p>Since 2007, as a leading moving company, we have been an ISO 9001:2015 and ISO 39001:2012 certified, IBA approved Packers and Movers company, promising and delivering throughout India.</p>
                <div class="row">
					<div class="col-sm-7">
						<form method="post" id="qteform2" onsubmit="return false" class="row">
	<div class="col-sm-6">
		<input type="text" name="name" placeholder="Full Name"
			class="form-control">
	</div>

	<div class="col-sm-6">
		<input type="email" name="email" placeholder="Email Address"
			class="form-control">
	</div>

	<div class="col-sm-6">
		<input type="tel" name="phone" placeholder="Phone Number"
			class="form-control">
	</div>
	<div class="col-sm-6">
		<input type="text" name="city" placeholder="City"
			class="form-control">
	</div>

	<div class="col-sm-12">
		<textarea name="message" class="form-control" placeholder="Message"
			style="height: 110px"></textarea>
	</div>

	<div class="col-sm-12 text-left">
		<br>
		<div id="resultqt2"></div>
		<input id="submitbtnqt2" type="submit" value="Submit"
			class="btn btn-success"> <input type="reset" value="Clear"
			onclick="$('#resultqt2').html('');" class="btn btn-outline-danger">
	</div>
</form>
<script type="text/javascript">
$(function(){
	$('#submitbtnqt2').click(function(){
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('contacts/franchise_save')?>",
			data: $("#qteform2").serialize(),
			beforeSend: function(){
				$('#resultqt2').html('<p style="color:red">Please wait...</p>');
			},
			success: function(data){
				$('#resultqt2').empty();
				if(data=='1'){
					data="<div class='alert alert-success'><h4>Success ! Thanks for contacting us.</h4></div>";
					$("#qteform2").trigger('reset');
				}
				$('#resultqt2').html(data);
			}
		});
	});
	});
</script>
					</div>
					<div class="col-sm-5">
						<img src="<?=base_url("assets/img/franchise.jpg")?>" alt="about om packers" class="img-responsive img-thumbnail">				
					</div>
				</div>
                
				<br><br>				
            </div>
         </div>
	</div>
</div>