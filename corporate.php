<?php require_once('header.php'); ?>
<style>
    .eventExh {
        background: url('images/celeBanner.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section class="mainsec container">
    <section class="eventExh text-light">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                <h1 class="hasty-font fs-90">Corporate & Exhibition</h1>
                <p class="fs-25 my-4">
                    <?php echo $globcall['servicescontent']; ?>
                </p>
            </div>
        </div>
    </section>
    <section class="container corporateDevid">
        <div class="row">
            <div class="col-sm-4 text-center bg-green brd p-2">
                <a href="javascript:void(0)" id="corporateEvent"
                    class="h2 text-decoration-none text-white">Corporate</a>
            </div>
            <div class="col-sm-4 text-center bg-green brd p-2">
                <a href="javascript:void(0)" id="casualEvent" class="h2 text-decoration-none text-white">Personal</a>
            </div>
            <div class="col-sm-4 text-center bg-green brd p-2">
                <a href="javascript:void(0)" id="exhibition" class="h2 text-decoration-none text-white">Exhibition</a>
            </div>
        </div>
    </section>
    <section id="eventSec" class="commonSec">
        <div class="row birthRow g-0">
            <div class="col-9 birthday9">
                <h1 class="text-green hasty-font fs-90">Birthday<br>
                    Parties </h1>
                <p class="text-green text-justify fs-25">Organising a birthday party for your kid, family member or your
                    loved one is not easy, just finalizing a place is not enough, a party needs decorations, gift
                    packers, cake decorators, food for guest, and entertainment services. Fortunately our team of
                    birthday event planner knows it all and will help to get you the most reliable and affordable
                    services. We at OnFleek provide you with different themes for kids as well as for adults. We'll be
                    happy to help you with the best creative ideas, excellent decoration, delectable food, and
                    entertainment services for various events. Shoot us a message; we are all ears.
                </p>
                <a href="contact.php" class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
            </div>
            <div class="col-3">
                <img src="images/birthdayRight.png" class="img-fluid w-100" alt="birthday">
            </div>
        </div>
        <div class="row corporateRow g-0">
            <div class="col-3">
                <img src="images/corporateLeft.png" class="img-fluid w-100" alt="birthday">
            </div>
            <div class="col-9 corporate9">
                <h1 class="text-green hasty-font text-end fs-90">Corporate
                    <br>
                    Gathering
                </h1>
                <p class="text-green fs-25 text-end">Corporate gathering is an event organized by a company for
                    their employees, shareholders, partners, clients or potential future clients. Our team focuses on
                    successfully organizing corporate events such as social activity, hospitality or events that are
                    undertaken by a business entity. We ensure that all your events are executed smoothly without any
                    hassle.</p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150 fs-25 w-150">Book
                        Now</a></div>
            </div>
        </div>

        <div class="row corporateRow g-0">
        <div class="col-9 proLaunch9">
                <h1 class="text-green hasty-font text-end fs-90">Product Launch
                </h1>
                <p class="text-green fs-25 text-end">Product launch provides brands the opportunity to maximize
                    publicity, promotional exposure and market penetration. In order to create such a spectacular
                    introductory showcase. From prints of flyers to the heart touching decorations – every aspect of the
                    event can be made a magical experience for guests. Our event managers can work effectively to create
                    the brand value in a launch that reflects the new product’s niche. </p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150 fs-25 w-150">Book
                        Now</a></div>
            </div>
            <div class="col-3">
                <img src="images/proLeft.png" class="img-fluid w-100" alt="Product Launch">
            </div>

        </div>
        <div class="row exhibiRow g-0">
            <div class="col-9 exhibi9">
                <h1 class="text-green hasty-font fs-90">Exhibition
                </h1>
                <p class="text-green text-justify fs-25">Exhibition is an organised presentation and a method to display
                    the items in an aesthetic way. It occurs in many sectors i.e Educational, cultural, Art gallery,
                    trade fairs and more commercially focused. It is exhibited in an appealing manner i.e visually and
                    conceptual based.</p>
                <a href="contact.php" class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
            </div>
            <div class="col-3">
                <img src="images/exhibitionLeft.png" class="img-fluid w-100" alt="Exhibition">
            </div>
        </div>
    </section>
</section>
<?php require_once('footer.php'); ?>