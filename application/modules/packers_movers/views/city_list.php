<?php
$st=strtolower(str_replace(" ", "-", $state));
$state=ucwords($state);
?>
<style>
.citycard{padding:30px 10px;margin: 10px 5px;text-align:center;background:#d15323;border-radius:5px;transition:all .6s ease}
.citycard:hover{background:#f30404;color:#fff}
.citycard:hover a{color:#fff}
</style>
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1>Our Branches</h1>
                <ul>
                    <li><a href="<?=site_url()?>">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Areas</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="our-service-page w100-l pb-100">
	<div class="container feature-content-section" style="padding-top:70px"> 
        <div class="row">
            <div class="col-sm-12">
                <h3>Radhika Cargo Packers and Movers</h3>
		        <div class="row" id="pad">        
                        <?php 
//                         ',"West Bengal"),array('',"West Bengal"),array('Raniganj',"West Bengal"),array('Mirik',"West Ben"West Bengal"),array('Raniganj',"Bihar"),array('Forbesganj',"Bihar"),array('Araria',"Bihar"),array('Bhagalpur',"Bihar"),array('Saharsa',"Bihar"),array('Begusarai',"Bihar"),array('',"West Bengal"));
                        $cty=array("Howrah","Naihati","Bolpur","Barrackpore","Bardhaman","Krishna Nagar","Kanchrapara","Kalyani","Ichapur","Sodpur","Ranaghat","Dum Dum","Barrackpore","Bolpur","Shyamnagar","Berhampore","Basirhat","Kharagpur","Jhargram","Bankura","Khatra","Katwa","Bangaon","Uluberia","Jhargram","Haldia","Bhatpara","Panihati","Baranagar","Madhyamgram","Barasat","Domjur","Bankra","Singur","Khardaha","Hooghly");
                        foreach($cty as $c){?>
                        <div class="col-sm-4">
                        	<div class="citycard">
							<a href="<?=site_url(strtolower(str_replace(" ","-",$c)).'-packers-movers')?>" title="packers and movers in <?=@$c?>">Packers & Movers in <?=$c?></a>
							</div>                        
	                    </div> 
                        <?php }?>
				</div>
            </div>
         </div>
	</div>
</div>