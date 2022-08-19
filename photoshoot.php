<?php require_once('header.php'); ?>
<style>
    .talentManage {
        background: url(./images/photograBanner.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section class="mainsec container">
    <section class="talentManage text-light">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                <h1 class="hasty-font fs-90">Photo Shoots + Styling</h1>
                <p class="fs-25 my-4">
                    <?php echo $globcall['servicescontent']; ?>
                </p>
            </div>
        </div>
    </section>
    <section id="videoSec" class="commonSec videoSec">
        <div class="row vidprodRow g-0">
            <div class="col-3">
                <img src="images/vidprodLeft.jpg" class="img-fluid w-100" alt="Video Production">
            </div>
            <div class="col-9 photoSho9">
                <h1 class="text-green hasty-font text-end fs-90 mb-sm-5">Photo Shoots + Styling</h1>
                <p class="text-green text-justify fs-25 text-end">Photography, videography and styling services we offer help create a video of the event you organize and can be a game changer as far as post event marketing and conversations are concerned. A well created video can go a long way for theme continuity and create a long-lasting impact for your audiences. Whether it is a Company Video which is used to project and impress upon current and prospective clients or an event video or any other marketing tool needed to further your objectives. We take it start to finish and deliver the final product</p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
                </div>
            </div>
        </div>
    </section>
</section>
<?php require_once('footer.php'); ?>