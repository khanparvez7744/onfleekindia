<?php require_once('header.php'); ?>
<section class="mainsec container">
    <section class="bannerSerSec text-light">
        <div class="row">
            <div class="col-8 mx-auto text-center">
                <p class="fs-25 my-4">
                    <?php echo $globcall['servicescontent']; ?>
                </p>
            </div>
        </div>
    </section>
            <section class="serviceSec pt-sm-5 pb-sm-5 pt-2 pb-2 px-sm-5 px-4 text-center" data-aos="fade-up" data-aos-duration="1000">
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
</section>
<?php require_once('footer.php'); ?>