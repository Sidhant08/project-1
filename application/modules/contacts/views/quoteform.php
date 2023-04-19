<form method="post" id="qteform1" onsubmit="return false" class="row">
	<div class="col-sm-6 form_box mb-15">
	<label>Name *</label>
		<input type="text" name="name" placeholder="Full Name"
			class="form-control">
	</div>

	<div class="col-sm-6 form_box mb-15">
		<label>Phone *</label>
		<input type="tel" name="phone" placeholder="Phone Number"
		class="form-control">
	</div>
	
	<div class="col-sm-12 form_box mb-15">
	<label>Email</label>
		<input type="email" name="email" placeholder="Email Address"
			class="form-control">
	</div>
	
	<div class="col-sm-6 form_box mb-15">
		<label>Moving From *</label> <input type="text" name="mfrom"
			placeholder="Moving From" value="<?=@$city." ".@$state?>"
			class="form-control">
	</div>
	<div class="col-sm-6 form_box mb-15">
		<label>Moving To *</label> <input type="text" name="mto"
			placeholder="Moving To" class="form-control">
	</div>

	<div class="col-sm-12 form_box mb-15">
		<textarea name="message" class="form-control" placeholder="Message"
			style="height: 110px"></textarea>
	</div>

	<div class="col-sm-12 text-left" style="margin-top:5px;">
		<div id="resultqt1"></div>
		<input id="submitbtnqt1" type="submit" style="width:150px; color:white;" value="Submit"
			class="btn btn-success"> <input type="reset" value="Clear"
			onclick="$('#resultqt1').html('');" class="btn btn-secondary" style="color:white;">
	</div>
</form>
<script type="text/javascript">
$(function(){
	$('#submitbtnqt1').click(function(){
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('contacts/booking')?>",
			data: $("#qteform1").serialize(),
			beforeSend: function(){
				$('#resultqt1').html('<p style="color:red">Please wait...</p>');
			},
			success: function(data){
				$('#resultqt1').empty();
				if(data=='1'){
					data="<div class='alert alert-success'><h4>Success ! Thanks for contacting us.</h4></div>";
					$("#qteform1").trigger('reset');
				}
				$('#resultqt1').html(data);
			}
		});
	});
	});
</script>
<style>
#qteform1 ::placeholder {
  color: grey;
  font-weight:normal;
}
#qteform1 input{margin-bottom:9px;color: #000;font-weight: bold;}
#qteform1 p {
    margin-bottom: 0px;
}
#qteform1 div label{    margin: -7px 5px;
    height: 16px;
    line-height: 15px;
    font-size: 12px;
    background: #fff;
    position: absolute;
    width: fit-content}
</style>