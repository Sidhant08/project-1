<style>
.imgrows img{height:300px}
.breadcumb-area {background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url(<?=base_url("assets")?>/img/banner.jpg) no-repeat center/cover;}
</style>
<div class="breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="breadcumb-content">
					<h1>Track Shipment</h1>
					<ul>
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li>Tracking</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="our-service-page w100-l fixed-padding">
	<div class="container" style="padding-top:70px"> 
        <div class="row">
            <div class="col-sm-6 text-center pt-20 pb-100">
                <form method="post" id="trackform" onsubmit="return false" class="row">
                	<label>Enter Your Tracking Number</label><br>
                	<input name="trackcode" class="form-control">
                	<div class=" text-left">
						<br>
						<div id="resultqt15"></div>
						<input id="submitbtnqt15" type="submit" value="Submit"
							class="btn btn-success"> <input type="reset" value="Clear"
							onclick="$('#resultqt15').html('');" class="btn btn-outline-danger">
					</div>
                </form>
            </div>
            <div class="col-sm-6 text-center pt-20 pb-100">
            	<img src="<?=base_url()?>assets/img/princepackers.png" alt="tracking icon"><br>
            </div>
         </div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$('#submitbtnqt15').click(function(){
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('tracking/check')?>",
			data: $("#trackform").serialize(),
			beforeSend: function(){
				$('#resultqt15').html('<p style="color:red">Please wait...</p>');
			},
			success: function(data){
				$('#resultqt15').html(data);
			}
		});
	});
	});
</script>