<div class="modal fade" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Request a Quick Quotation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="setClose()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form method="post" id="qteform8" onsubmit="return false" class="row">

					<div class="col-sm-6">
						<label>Name *</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="col-sm-6">
						<label>Mobile *</label>
						<input type="tel" name="phone" class="form-control">
					</div>
					<div class="col-sm-12">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="col-6">
						<label>Moving From *</label> <input type="text" name="mfrom" id="mfromqt"
							value="<?=@$city . " " . @$state ?>" class="form-control">
					</div>
					<div class="col-6">
						<label>Moving To *</label> <input type="text" name="mto" class="form-control">
					</div>

					<div class="col-sm-12">
						<label>Query *</label>
						<textarea name="message" class="form-control" style="height: 50px"></textarea>
					</div>

					<div class="col-sm-12 text-left">
						<br>
						<div id="resultqt8"></div>
						<input id="submitbtnqt8" type="submit" value="Submit Request" class="btn btn-primary"> <input
							type="reset" value="Clear" onclick="$('#resultqt8').html('');"
							class="btn btn-outline-secondary">
					</div>
				</form>
				<script type="text/javascript">
					$(function () {
						$('#submitbtnqt8').click(function () {
							$.ajax({
								type: "POST",
								url: "<?php echo site_url('contacts/booking') ?>",
								data: $("#qteform8").serialize(),
								beforeSend: function () {
									$('#resultqt8').html('<p style="color:red">Please wait...</p>');
								},
								success: function (data) {
									$('#resultqt8').empty();
									if (data == '1') {
										data = "<div class='alert alert-success'><h4>Success ! Thanks for your Enquiry.</h4></div>";
										$("#qteform8").trigger('reset');
									}
									$('#resultqt8').html(data);
								}
							});
						});
					});
				</script>
			</div>
		</div>
	</div>
</div>