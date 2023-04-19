<div class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="breadcrumb-content">
                <h1>Frontend Training in <?= $city ?>
                </h1>
                <ul>
                    <li><a href="<?= site_url() ?>">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Frontend Training in <?= $city ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="our-service-page w100-l fixed-padding">
    <div class="container" style="padding-top:70px">
        <div class="row">
            <div class="col-sm-12 pb-100">
                <h2>Best Frontend Training in <?= $city ?>
                </h2>
                <div class="row">
                    <div class="col-sm-7">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, alias! Atque eum autem est et architecto, officia facere rerum repudiandae tempore, sed, excepturi magni quas nostrum numquam aperiam adipisci. Vero.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor labore odio unde reiciendis porro, deserunt, dolores cupiditate dolorem blanditiis voluptatibus hic, laudantium neque. Tenetur ipsum dolor at esse, sequi consequuntur.
                        </p>

                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa laboriosam aperiam magnam magni earum minima nesciunt voluptatem illum quaerat, ab nemo quia perferendis molestiae debitis id est officia mollitia nihil.
                    </div>
                    <div class="col-sm-5">
                        <img src="<?= base_url("assets/img/images/img6.png") ?>" alt="my Site"
                            class="img-responsive img-thumbnail"><br><br>

                    </div>
                </div>

                <div class="row">
                    <div class="text-center">
                        <?php $this->load->view('template/call_widget') ?>
                        <?php include 'city_links.php'; ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>