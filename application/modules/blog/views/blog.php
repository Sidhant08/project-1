<style>
.imgrows img{height:300px}
.breadcumb-area {background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0,0,0,0.5)), url(<?=base_url("assets")?>/img/truck_ban.jpg) no-repeat center/cover;}
.styled-pagination{display: inline-flex;list-style: none;}
.styled-pagination li a.active{color:#fff !important}
</style>
<div class="breadcumb-area">
		<div class="container">
			<div class="row">
				<div class="breadcumb-content">
					<h1>Blog <small>OM Packers and Movers</small></h1>
					<ul>
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="blog-section style-7 bg-3 pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-8">
					<div class="row">
					<?php
$this->load->helper('text');
foreach ($query->result() as $brows){
	$nm=str_replace("--","-",urlencode(str_replace(" ","-", str_replace(",", " ", $brows->title))));
	$link=strtolower(site_url('blog/read/'.$nm.'/'.$brows->b_id));
    if ($brows->image)
        $img=base_url("assets/uploads/blog/$brows->image");
    else $img=base_url('assets/img/ompackers.png');
?>

						<div class="col-lg-6">
							<div class="blog-single-items">
								<div class="blog-thumb">
									<a href="<?=$link?>">
										<img src="<?=$img?>" alt="<?=$brows->title?>">
									</a>
									<div class="blog-meta-top">
										<ul>
											<li><a href="#">Packers</a></li>
											<li><a href="#">Movers</a></li>
										</ul>
									</div>
								</div>
								<div class="blog-content">
									<div class="blog-meta">
										<span><a href="#"><?=$brows->author?></a></span> - <span><?=$brows->date?></span>
									</div>
									<div class="blog-content-text text-center">
										<h5><a href="<?=$link?>"><?=$brows->title?></a></h5>
										<p><?=character_limiter(strip_tags($brows->description),200)?></p>
									</div>
								</div>
							</div>
						</div>
						
<?php }?>
<div class="col-lg-12">
						<div class="pagination pt-30 pb-70 pl-10">
							<?php echo $this->pagination->create_links()?>
						</div>
					</div>
					</div>
				</div>
				<?php include 'sidebar.php';?>
			</div>
		</div>
	</div>
