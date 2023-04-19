<?php 
$test=array(
		"0"=>array('name'=>'Miss. Ankita Sain',"prof"=>"Teacher","msg"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet viverra dolor eget condimentum. In felis ligula, pharetra sed efficitur ut, pellentesque eu augue. Vestibulum tempor mi ac magna venenatis, vel hendrerit ante mattis. Proin in convallis mauris. Cras euismod sodales felis. Duis commodo pharetra risus, nec hendrerit neque cursus id.
 
"),
		"1"=>array('name'=>'Mr. Abhijit Roy',"prof"=>"Businessman","msg"=>"Duis aliquet eros eu ipsum sagittis, ut accumsan neque ullamcorper. Aenean semper, leo vel rhoncus eleifend, tortor nibh aliquam enim, dignissim rutrum enim dui quis sem. Cras rhoncus velit sed dui tempus, ut dapibus magna aliquam. Nullam non augue sed est feugiat facilisis.
"),
		"2"=>array('name'=>'Dr. Rishika Basu',"prof"=>"Doctor","msg"=>"Quisque mi risus, laoreet et est ac, convallis egestas lacus. In congue nulla eu odio luctus hendrerit. Fusce vehicula at quam auctor blandit. Curabitur pellentesque leo a convallis maximus. Cras malesuada elit et est ullamcorper tempor. Quisque iaculis augue sed convallis malesuada.

"),
		"3"=>array('name'=>'Mr. Rishi Gautam',"prof"=>"Army","msg"=>"Vestibulum elementum lacus in nulla consequat vestibulum. Etiam id feugiat ante. Aliquam ac posuere leo. Fusce sed tincidunt arcu, pretium suscipit metus. Praesent fermentum velit non nisi ornare bibendum. 
"),

		"4"=>array('name'=>'Mrs. Indu Saha',"prof"=>"Nurse","msg"=>"Nam vel imperdiet ligula, eget consequat ligula. Cras aliquet ligula a mi gravida dictum. Proin euismod, dolor eu dapibus faucibus, metus nunc pretium augue, eget elementum metus arcu id nunc. Quisque ornare risus mi, vitae lobortis metus varius nec."),
);
?>
<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1>Testimonials</h1>
                <ul>
                    <li><a href="<?=site_url()?>">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Testimonials</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="our-service-page w100-l fixed-padding">
    <div class="container pt-70 pb-100">
        <div class="row">
            <div class="col-sm-12">
                <h2>Customers About Us</h2>
                <p>We are serving for more than 5 years in Siliguri as our hometown, and during this years of our journey, we have successfully build our client base with our efficient services</p>
                <div class="row">
                    <?php for($i=0;$i<=4;$i++){?>
                    <div class="col-sm-6 active">
                        <div class="testimonial-single-item">
                            <div class="testimonial-thumb">
                                <img src="<?=base_url()?>assets/img/images/user.png" loading="lazy" alt="testimonial Img">
                                <div class="testimonial-icon">
                                    <span><i class="fas fa-quote-left"></i></span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <h4><?=$test[$i]['name']?></h4>
                                <p class="testimonial-designation"><?=$test[$i]['prof']?></p>
                                <p class="testimonial-content-text"><?=$test[$i]['msg']?></p>

                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <br><br>
                </div>
            </div>
        </div>
    </div>