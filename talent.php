<?php require_once('header.php'); ?>
<style>
    .printingBanner{
        background: url(./images/talentManage.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section class="mainsec container">
<section class="printingBanner text-light">
    <div class="row">
        <div class="col-12 mx-auto text-center">
            <h1 class="hasty-font fs-90">Talent Management</h1>
            <p class="fs-25 my-4"><?php echo $globcall['servicescontent']; ?>
            </p>
        </div>
    </div>
</section>
<section id="giftingSec" class="commonSec">
        <div class="row giftingRow g-0">
            <div class="col-9 talentMan9">
                <h1 class="text-green hasty-font mb-sm-5 mb-2 fs-90">Talent Management</h1>
                <p class="text-green text-justify fs-25">Talent Management starts with an intensive one-on-one consultation. We encompass workforce planning, developing, onboarding, recruiting, employee engagement, learning and succession.
                </p>
                <a href="contact.php" class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
            </div>
            <div class="col-3">
                <img src="images/incentiveLeft.png" class="img-fluid w-100" alt="Talent Management">
            </div>
        </div>
    </section>
</section>
<?php require_once('footer.php'); ?>