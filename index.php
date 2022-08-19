<?php require_once('header.php'); ?>
    <section class="mainsec container">
        <section class="bannerSec">
            <div id="ciOnFleek" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#ciOnFleek" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#ciOnFleek" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#ciOnFleek" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#ciOnFleek" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <?php
                    $sql="SELECT * FROM home_banner where is_delete=0";
                    $result= $pdo->query($sql);
                    $data= $result->fetchAll();
                    ?>
                    <div class="carousel-item active">
                        <img src="images/<?php echo $data[3]['banner']; ?>" class="d-block w-100" alt="banner5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/<?php echo $data[0]['banner']; ?>" class="d-block w-100" alt="banner1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/<?php echo $data[1]['banner']; ?>" class="d-block w-100" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/<?php echo $data[2]['banner']; ?>" class="d-block w-100" alt="Banner 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#ciOnFleek" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#ciOnFleek" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="taglineSec px-sm-5 px-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-6 me-auto my-sm-5 my-0">
                        <h1 class="text-green fs-60 hasty-font mb-sm-4">From selection to execution,<br>
We’re here with you at every step !</h1>
                        <p class="text-green fs-30">Our great design is the basic fundamental of our work to convey every message- simply, visually, effectively.</p>

                        <a class="btn bg-green fs-25 w-150 mt-sm-4 mt-2" href="contact.php">Book Now</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="serviceSec pt-sm-5 pt-3 px-5 text-center">
             <h1 class="text-green fs-60 hasty-font text-center mb-sm-2">Explore Our Services</h1>
             <p class="text-green fs-30 mb-sm-4">Your Vision + Our Expertise = The Perfect Collaboration</p>
            <div class="row gx-2">
                <?php $result=$pdo->query("SELECT * FROM occession_type where is_active=0");
                $data= $result->fetchAll();
                foreach($data as $value){ ?>
                <div class="col-sm-4 col-6">
                    <a href="<?php echo $value['link'] ?>">
                    <img src="images/<?php echo $value['image'] ?>" class="img-fluid w-100" alt="">
                    <div class="middle">
                        <div class="text"><?php echo $value['type'] ?></div>
                      </div>
                    </a>
                </div>
                <?php } ?>
            </div>

        </section>
        <section class="workSec pt-sm-5 pt-4" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-green fs-60 hasty-font text-center mb-sm-2">Our Works</h1>
            <p class="text-green fs-30 mb-sm-4 text-center">We make sure every guest receives a gracious welcome</p>

            <div class="row">
                <div id="ccWork" class="carousel slide ccWork" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#ccWork" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#ccWork" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#ccWork" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <?php $result=$pdo->query("SELECT * FROM setting");
                    $data=$result->fetch(); ?>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/<?php echo $data['whb1'] ?>" class="d-block w-100" alt="Work Banner1">
                            <div class="carousel-caption text-start">
                                <h1 class="fs-90"><?php echo $data['whbp1'] ?></h1>
                                <p class="fs-25 mtcorsva-font w-50"><?php echo $data['whbc1']; ?> </p>
                                <a class="btn w-200 btn-outline-light fs-30 d-none d-sm-block" href="./works.php">Read More</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/<?php echo $data['whb2'] ?>" class="d-block w-100" alt="Work Banner2">
                            <div class="carousel-caption text-start">
                                <h1 class="fs-90"><?php echo $data['whbp2'] ?></h1>
                                <p class="fs-25 mtcorsva-font w-50"><?php echo $data['whbc2'] ?></p>
                                <a class="btn w-200 btn-outline-light fs-30 d-none d-sm-block" href="./works.php">Read More</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/<?php echo $data['whb3'] ?>" class="d-block w-100" alt="Work Banner3">
                            <div class="carousel-caption text-start">
                                <h1 class="fs-90"><?php echo $data['whbp3'] ?></h1>
                                <p class="fs-25 mtcorsva-font w-50"><?php echo $data['whbc3'] ?></p>
                                <a class="btn w-200 btn-outline-light fs-30 d-none d-sm-block" href="./works.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#ccWork" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#ccWork" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="clientSec pt-sm-5 pb-sm-5 pt-4 pb-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <h1 class="fs-60 text-center hasty-font text-light">Our Clients</h1>
            <p class="text-white fs-30 mb-sm-4 text-center">Let us know your next event</p>
            <div class="row">
                    <div class="col-sm-12 px-5 py-0">
                        <div class="owl-carousel owl-theme clientHomeCaro px-4">
                            <div class="item cursor-pointer card overflow-hidden p-4">
                                <img src="images/moospring-logo.png" class="img-fluid w-100 d-block" alt="work">

                            </div>
                            <div class="item cursor-pointer card overflow-hidden p-4">
                                <img src="images/badhai-logo.png" class="img-fluid w-100 d-block" alt="work">

                            </div>
                            <div class="item cursor-pointer card overflow-hidden p-4">
                                <img src="images/apis-logo.png" class="img-fluid w-100 d-block" alt="work">

                            </div>
                            <div class="item cursor-pointer card overflow-hidden p-4">
                                <img src="images/moospring-logo.png" class="img-fluid w-100 d-block" alt="work">

                            </div>
                            <div class="item cursor-pointer card overflow-hidden p-4">
                                <img src="images/badhai-logo.png" class="img-fluid w-100 d-block" alt="work">

                            </div>
                            <div class="item cursor-pointer card overflow-hidden p-4">
                                <img src="images/apis-logo.png" class="img-fluid w-100 d-block" alt="work">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="chooseUsSec py-4 py-sm-5 px-4 text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="hasty-font text-green fs-60 mb-4">Why Choose Us</h1>
            <div class="row">
                  <?php
                   $result=$pdo->query("SELECT * FROM whychooseus where is_active=0");
                   $data=$result->fetchAll();
                   foreach ($data as $value) {

                 ?>
                <div class="col-6 col-md-6 col-xl-4 px-sm-5 px-0 py-sm-1"> <img src="images/<?php echo $value['image']; ?>" class="img-fluid" alt="whychoosus">
                    <p class="fs-25 text-green lato-font text-center mx-sm-5 mx-4 mt-3"><?php echo $value['content']; ?></p>
                </div>
                 <?php } ?>


            </div>
        </section>

    </section>
   <?php require_once('footer.php'); ?>