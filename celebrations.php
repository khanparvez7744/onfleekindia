<?php require_once('header.php'); ?>
<style>
    .photograBanner {
        background: url(./images/awardBanner.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section class="mainsec container">
    <section class="photograBanner text-light">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                <h1 class="hasty-font fs-90">Celebrations + Milestone</h1>
                <p class="fs-25 my-4">
                    <?php echo $globcall['servicescontent']; ?>
                </p>
            </div>
        </div>
    </section>
    <section id="videoSec" class="commonSec videoSec">
        <div class="row vidprodRow g-0">
            <div class="col-3">
                <img src="images/celebrityLeft.png" class="img-fluid w-100" alt="Celebrations">
            </div>
            <div class="col-9 celebra9">
                <h1 class="text-green hasty-font text-end fs-90 mb-sm-5">Celebrations + Milestone</h1>
                <p class="text-green text-justify fs-25 text-end">We are here to delight your big day. </p>
                <p class="text-green text-justify fs-25 text-end">Our service allows you to enjoy your big agenda so you can sip, soak up and socialize each and every moment hasslefree. Our collaborative approach helps you to comprehend effortless, flawless and tailored experience of your vision.</p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
                </div>
            </div>
        </div>
    </section>
</section>
<?php require_once('footer.php'); ?>