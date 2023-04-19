<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1>Web Design Training in <?= $city ?>
                </h1>
                <ul>
                    <span><a href="<?= site_url() ?>">Home</a></span>
                    <span><i class="fa fa-angle-right"></i></span>
                    <span>Web Design Training in <?= $city ?></span>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="our-service-page w100-l fixed-padding">
    <div class="container" style="padding-top:70px">
        <div class="row">
            <div class="col-sm-12 pb-100">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?= base_url("assets/img/images/img8.png") ?>"
                            alt="web my site in <?= $city ?>"
                            class="img-responsive img-thumbnail">
                        <!-- <video src="?= base_url("assets/img/images/car.mp4") ?>" type="video/mp4" style="width: 100%; height: 260px" controls></video> -->

                    </div>

                    <div class="col-sm-12 col-md-8">
                        <h2>Web Design Training in <?= $city ?>
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptates repellat est possimus perferendis quis dolor dolorem eligendi maxime aut esse facere, beatae dignissimos, illum reiciendis? Quidem debitis harum ad?
                        </p>
                        <br>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil nostrum dolorum in nesciunt vel, tenetur ut neque quasi iste fugit! Maiores deserunt officia dolorum sunt labore, inventore illo iste dolor.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iste ipsa saepe eos temporibus aut at nihil esse aperiam facere consectetur, repellat culpa tempora similique animi perferendis nemo eligendi sapiente.
                        </p>

                    </div>
                </div>
                <br><br>
            </div>
        </div>
        <div class="text-center">
            <?php $this->load->view('template/call_widget') ?>
            <?php include 'city_links.php'; ?>
            <br>
        </div>
    </div>

</div>