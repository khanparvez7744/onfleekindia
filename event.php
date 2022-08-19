<?php require_once('header.php'); ?>
<style>
    .eventExh {
        background: url('images/exbhitions copy.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width:576px) {}
</style>
<section class="mainsec container">
    <section class="eventExh text-light">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                <h1 class="hasty-font fs-90">Event & Exhibition</h1>
                <p class="fs-25 my-4">
                    <?php echo $globcall['servicescontent']; ?>
                </p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-4 text-center bg-green border border-light p-2">
                <a href="javascript:void(0)" id="corporateEvent"
                    class="h2 text-decoration-none text-white">Corporate</a>
            </div>
            <div class="col-sm-4 text-center bg-green border border-light p-2">
                <a href="javascript:void(0)" id="casualEvent" class="h2 text-decoration-none text-white">Personal</a>
            </div>
            <div class="col-sm-4 text-center bg-green border border-light p-2">
                <a href="javascript:void(0)" id="exhibition" class="h2 text-decoration-none text-white">Exhibition</a>
            </div>
        </div>
    </section>
    <section id="eventSec" class="commonSec">
        <div class="row birthRow g-0">
            <div class="col-9 birthday9">
                <h1 class="text-green hasty-font fs-90">Birthday<br>
                    Parties </h1>
                <p class="text-green text-justify fs-25">Organising a birthday party for your kid, family member or your loved one is not easy, just finalizing a place is not enough, a party needs decorations, gift packers, cake decorators, food for guest, and entertainment services. Fortunately our team of birthday event planner knows it all and will help to get you the most reliable and affordable services. We at OnFleek provide you with different themes for kids as well as for adults. We'll be happy to help you with the best creative ideas, excellent decoration, delectable food, and entertainment services for various events. Shoot us a message; we are all ears.
                </p>
                <a href="contact.php" class="btn bg-green rounded-0 px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
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
                <p class="text-green text-justify fs-25">Corporate gathering, a event organized by a company for their employees, shareholders, partners, clients or potential future clients. Our team focuses on successfully organizing corporate events such as social activity, hospitality or event that is under taken by a business entity. We ensure that all your events are executed smoothly without any hassle, so you can concentrate on taking the crucial decisions without the added worry of handling the nitty-gritty of the event.
                </p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green rounded-0 px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150 fs-25 w-150">Book
                        Now</a></div>
            </div>
        </div>

         <div class="row corporateRow g-0">
            <div class="col-3">
                <img src="images/corporateLeft.png" class="img-fluid w-100" alt="birthday">
            </div>
            <div class="col-9 corporate9">
                <h1 class="text-green hasty-font text-end fs-90">Product Launch
                </h1>
                <p class="text-green text-justify fs-25">At OnFleek, we understand that a product launch provides brand the opportunity to maximize publicity, promotional exposure and market penetration. As the new product can only be launch once – the production and execution must be flawless for the event. In order to create such a spectacular introductory showcase, a detailed understanding of the product is essential. Our event managers can work tirelessly with your company to create the brand value in a launch event that reflects the new product’s market niche. From print work of flyers, brochures to designer exhibition stands, to wireless internet connections to the heart touching decorations – every aspect of the event can be made a magical experience for attendees. Using the latest lighting techniques and indoor pyrotechnics devices, we will not only create a dramatic product reveal, but also maintain the audience’s attention by having a pro-active stage crew and a stunning presentation team.
                </p>
                <div class="text-end"><a href="contact.php"
                        class="btn bg-green rounded-0 px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150 fs-25 w-150">Book
                        Now</a></div>
            </div>
        </div>

        <!--<div class="row culturalRow g-0">-->
        <!--    <div class="col-9 cultural9">-->
        <!--        <h1 class="text-green hasty-font fs-90">Cultural Events </h1>-->
        <!--        <p class="text-green text-justify fs-25">Cultural events are meant to enrich the cultural standing of the city in which they are held. Festivals are glamorous and exciting but the truth is they are hard to manage in every aspect. Our cultural events team tries to create a unique, memorable event. Taking in account the advice of local people as they are the main audience in a cultural event. All cultural events are linked to the well-being of the community and issues of identity. OnFleek provides the best of services to make these cultural events memorable.-->
        <!--        </p>-->
        <!--        <a href="contact.php" class="btn bg-green rounded-0 px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>-->
        <!--    </div>-->
        <!--    <div class="col-3">-->
        <!--        <img src="images/culturalLeft.png" class="img-fluid w-100" alt="cultural">-->
        <!--    </div>-->
        <!--</div>-->

        <div class="row exhibiRow g-0">
            <div class="col-9 exhibi9">
                <h1 class="text-green hasty-font fs-90">Exhibition
                </h1>
                <p class="text-green text-justify fs-25">As more and more brands compete for consumers’ attention,
                    standing out of the crowd is imperative for your brand in fast evolving exhibition space. On Fleek
                    comes up with ideas that create a spectacular visual impact, and encourage dynamic engagements with
                    your brand and products in the National or International Market. We use the latest technologies for
                    visitors to experience your brand, while grasping the information you wish to deliver in the most
                    interesting ways. We ensure you get the maximum impact per square feet of your exhibit space by
                    encouraging conversations with your brand.
                </p>
                <a href="contact.php" class="btn bg-green rounded-0 px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
            </div>
            <div class="col-3">
                <img src="images/exhibitionLeft.png" class="img-fluid w-100" alt="Exhibition">
            </div>
        </div>
    </section>
</section>
<?php require_once('footer.php'); ?>