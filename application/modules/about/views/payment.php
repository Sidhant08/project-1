<div class="breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="breadcumb-content">
					<h1>Payment</h1>
					<ul>
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li>Payments</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php 
// Merchant key here as provided by Payu
$MERCHANT_KEY = "xdGiPpYb";
// Merchant Salt as provided by Payu
$SALT = "sKBzLT6Gaq";
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$posted = array();
if(!empty($_POST)) {
	foreach($_POST as $key => $value) {
		$posted[$key] = $value;
	}
}
$formError = 0;
if(empty($posted['txnid'])) {
	// Generate random transaction id
	$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
	$txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

if(empty($posted['hash']) && sizeof($posted) > 0) {
	if(
			empty($posted['key'])
			|| empty($posted['txnid'])
			|| empty($posted['amount'])
			|| empty($posted['firstname'])
			|| empty($posted['email'])
			|| empty($posted['phone'])
			|| empty($posted['productinfo'])
			|| empty($posted['surl'])
			|| empty($posted['furl'])
			|| empty($posted['service_provider'])
			) {
				$formError = 1;
			} else {
				$hashVarsSeq = explode('|', $hashSequence);
				$hash_string = '';
				foreach($hashVarsSeq as $hash_var) {
					$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
					$hash_string .= '|';
				}
				$hash_string .= $SALT;
				$hash = strtolower(hash('sha512', $hash_string));
				$action = $PAYU_BASE_URL . '/_payment';
			}
} elseif(!empty($posted['hash'])) {
	$hash = $posted['hash'];
	$action = $PAYU_BASE_URL . '/_payment';
}
?>
 <script>
    var hash = '<?=$hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <body onLoad="submitPayuForm()">
  
  <div class="section-yellow" >
    <div class="container">
    
    <div class="pnow-main-div">
      <div class="pnow-top-strip"><br><br><h4>Pay Now Here !</h4><br></div>
       <div class="pnow-form">
           <?php if($formError) { ?>
               <span style="color:red">Please fill all mandatory fields.</span>
               <br/>
               <br/>
           <?php } ?>

          <h3>Mandatory Parameters For Payment</h3>

                  <form action="<?=$action; ?>" method="post" name="payuForm" class="form-horizontal" style="position:relative;">
                      <input type="hidden" name="key" value="<?=$MERCHANT_KEY ?>" />
                      <input type="hidden" name="hash" value="<?=$hash ?>"/>
                      <input type="hidden" name="txnid" value="<?=$txnid ?>" />

                    <div class="form-group">
                      <label class="control-label col-sm-3 pro-lbl">Select Option</label>
                      <div class="col-sm-9">
                         <label class="radio-inline radio-btn rd-pad">
                             <input type="radio" name="paymentFor" class="gr_bill_quotationc" value="GR Number">GR Number
                         </label> &nbsp;  &nbsp;  &nbsp; 
                        <label class="radio-inline radio-btn rd-pad">
                            <input type="radio" name="paymentFor" class="gr_bill_quotationc" value="Bill Number">Bill Number
                        </label> &nbsp;  &nbsp;  &nbsp; 
                        <label class="radio-inline radio-btn rd-pad">
                            <input type="radio" name="paymentFor" class="gr_bill_quotationc" value="Quotation Number">Quotation Number
                        </label>

                       </div>
                    </div>
                
                        <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl"><span id="showN">GR Number/Bill Number/Quotation Number</span>:</label>
                          <div class="col-sm-7">
                            <input type="text" name="gr_bill_quotation" id="gr_bill_quotation" type="text" maxlength="15"  class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl">Name:</label>
                          <div class="col-sm-7">
                            <input type="text" name="firstname" id="firstname" type="text" maxlength="50" value="<?=(empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl">Email ID:</label>
                          <div class="col-sm-7">
                            <input type="email" name="email" id="email" type="email"  maxlength="50" value="<?=(empty($posted['email'])) ? '' : $posted['email']; ?>" class="form-control">
                          </div>
                        </div>
                        
                         <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl">Mobile No:</label>
                          <div class="col-sm-7">
                            <input type="text" name="phone" type="text" maxlength="10" value="<?=(empty($posted['phone'])) ? '' : $posted['phone']; ?>" class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl">About Payment:</label>
                          <div class="col-sm-7">
                            <textarea class="form-control" name="productinfo"><?=(empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl">Amount:</label>
                          <div class="col-sm-7">
                            <input name="amount" type="number"  maxlength="13" value="<?=(empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-3 pro-lbl">City:</label>
                          <div class="col-sm-7">
                            <input name="city" type="text" maxlength="50" value="<?=(empty($posted['city'])) ? '' : $posted['city'] ?>" class="form-control">
                              <input name="surl" type="hidden"  value="<?=site_url("pay_success")?>"/>
                              <input name="furl" type="hidden" value="<?=site_url("pay_failed")?>"/>
                              <input type="hidden" name="service_provider" value="payu_paisa" size="64" />

                          </div>
                        </div>
     
                        <div class="form-group">
                          <label class="control-label col-sm-3 text-r"></label>
                          <div class="col-sm-9">
                            <div class="row">
                                <?php if(!$hash) { ?>
                              <div class="col-md-6 col-sm-6"><button type="submit" class="btn btn-primary">Pay Now</button></div>
                                <?php }?>
                            </div>
                          </div>
                        </div>
                      </form><br><br><br><br>
       </div>
    </div>
    </div>
    </div>
  <script>
    $('.gr_bill_quotationc').on('change',function(){
       var g = $(this).val();
      $('#showN').html(g);
    })
  </script>