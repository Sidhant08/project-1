
<?php 
$faqs=array(
		array("q"=>"What is Lorem Ipsum?","a"=>"<p>Yes,Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>"),

		array("q"=>"Why do we use it?","a"=>"<p>Yes,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>"),

		array("q"=>"Where does it come from?","a"=>"<p>Yes,Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>"),

		array("q"=>"Where can I get some?","a"=>"<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>"),

		array("q"=>"Why do we use it?","a"=>"<p>Yes,The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>")
);
?>
<div class="breadcrumb-area breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="breadcrumb-content">
					<h1>Frequently Asked Questions</h1>
					<ul>
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li>FAQ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="our-service-page w100-l fixed-padding">
	<div class="container" style="padding-top:70px"> 
        <div class="row">
            <div class="col-sm-12">
                <h2>FAQ</h2>
                <div class="accordion" id="FAQaccordion">
				<?php 
				$i=1;
				foreach ($faqs as $f){?>
				  <div class="card">
						<div class="card-header" id="heading<?=$i?>" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
							<h5 class="mb-0" itemprop="name">
								<a data-toggle="collapse" data-target="#collapse<?=$i?>"
									aria-expanded="true" aria-controls="collapse<?=$i?>">
						          <span><?=$f['q']?></span>
						        </a>
							</h5>
						</div>
						<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="collapse<?=$i?>" class="collapse <?php if($i==1) echo "show"?>"
							aria-labelledby="heading<?=$i?>" data-parent="#FAQaccordion">
							<div class="card-body" itemprop="text">
				        <?=$f['a']?>
				      </div>
						</div>
					</div>
				<?php 
				$i++;
				}?>  
				</div>
				<br><br>				
            </div>
         </div>
	</div>
</div>