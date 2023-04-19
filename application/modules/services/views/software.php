<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1>Software Development Training in <?= $city ?>
                </h1>
                <ul>
                    <li><a href="<?= site_url() ?>">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Software Development Training <?= $city ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="our-service-page w100-l fixed-padding">
    <div class="container pb-100" style="padding-top:70px">
        <div class="row">
            <div class="col-sm-8">
                <h2>Software Development Training in <?= $city ?>
                </h2>
                <div class="row">
                    <div class="col-sm-8">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo praesentium, porro neque sint error ab ducimus pariatur consequatur sit nesciunt incidunt quidem perspiciatis excepturi itaque voluptatibus ullam delectus deserunt! Quae.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde officiis neque placeat. Rerum doloribus corrupti, pariatur explicabo voluptatum ipsam doloremque consequatur deserunt odio sequi, iste, minus blanditiis iure eaque quod.
                        </p>

                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum molestias velit explicabo suscipit, laboriosam veniam odio doloremque, excepturi harum nobis asperiores unde ex expedita eveniet pariatur minima iste officia id?
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img style="width: 100%;" src="<?= base_url("assets/img/images/img11.png") ?>"
                            alt="software my site in <?= $city ?>" class="img-responsive img-thumbnail">
                    </div>
                </div><br>

            </div>
            <div class="col-sm-4">
                <?php echo $this->load->view('contacts/quoteform') ?>
            </div><br>
        </div>

        <div class="text-center">
            <?php $this->load->view('template/call_widget') ?>
            <?php include 'city_links.php'; ?>
            <br>
        </div>
    </div>
</div>