<?php require_once('header.php'); ?>
<style>
    .photograBanner {
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
    <section class="photograBanner text-light">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                <h1 class="hasty-font fs-90">Photography & Videography</h1>
                <p class="fs-25 my-4">
                    <?php echo $globcall['servicescontent']; ?>
                </p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-6 text-center bg-green border border-light p-2">
                <a href="javascript:void(0)" id="videography"
                    class="h2 text-decoration-none text-white">Video Graphy</a>
            </div>
            <div class="col-sm-6 text-center bg-green border border-light p-2">
                <a href="javascript:void(0)" id="photography" class="h2 text-decoration-none text-white">Photo Graphy</a>
            </div>
        </div>
    </section>
    <section id="videoSec" class="commonSec videoSec">
        <div class="row vidprodRow g-0">
            <div class="col-3">
                <img src="images/vidprodLeft.jpg" class="img-fluid w-100" alt="Video Production">
            </div>
            <div class="col-9 vidprod9">
                <h1 class="text-green hasty-font text-end fs-90">Video
                    <br>
                    Production
                </h1>
                <p class="text-green text-justify fs-25">Event Video Production Services we offer help create a video of
                    the event you organize and can be a game changer as far as post event marketing and conversations
                    are concerned. A well created video can go a long way for theme continuity and create a long-lasting
                    impact for your audiences. Whether it is a Company Video which is used to project and impress upon
                    current and prospective clients or an event video or any other marketing tool needed to further your
                    objectives. We take it start to finish and deliver the final product to you.
                </p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green rounded-0 px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="videoSec p-5">
        <h1 class="text-green hasty-font fs-60 text-center mb-3">Videos</h1>
        <div class="row">

            <div class="col-sm-4 text-center"><iframe width="100%" height="250" src="https://www.youtube.com/embed/af2Ksuf9hbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div class="col-sm-4 text-center"><iframe width="100%" height="250" src="https://www.youtube.com/embed/PWXwi-gLxPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div class="col-sm-4 text-center"><iframe width="100%" height="250" src="https://www.youtube.com/embed/zzTufc-wDXY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
    </section>
    <section class="photoSec p-5">
    <h1 class="text-green hasty-font fs-60 text-center mb-5">Photography</h1>
        <div class="row g-4">
         <div class="col-sm-4"><img src="images/awardSociapa.jpg" class="img-fluid w-100 d-block border border-5 border-light" alt="photography"></div>
         <div class="col-sm-4"><img src="images/awardSociapa.jpg" class="img-fluid w-100 border border-5 border-light" alt="photography"></div>
         <div class="col-sm-4"><img src="images/awardSociapa.jpg" class="img-fluid w-100 border border-5 border-light" alt="photography"></div>
         <div class="col-sm-4"><img src="images/awardSociapa.jpg" class="img-fluid w-100 border border-5 border-light" alt="photography"></div>
         <div class="col-sm-4"><img src="images/awardSociapa.jpg" class="img-fluid w-100 border border-5 border-light" alt="photography"></div>
         <div class="col-sm-4"><img src="images/awardSociapa.jpg" class="img-fluid w-100 border border-5 border-light" alt="photography"></div>
        </div>
    </section>
</section>
<?php require_once('footer.php'); ?>