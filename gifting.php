<?php require_once('header.php'); ?>
<style>
  .carSec {
    background: url(./images/giftBanner.jpg);
    background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
  }
</style>
<section class="mainsec container">
  <section class="carSec text-light">
    <div class="row">
      <div class="col-12 mx-auto text-center">
        <h1 class="hasty-font fs-90">Gifting</h1>
        <p class="fs-25 my-4">
          <?php echo $globcall['servicescontent']; ?>
        </p>
      </div>
    </div>
  </section>
  <section id="giftingSec" class="commonSec">
    <div class="row giftingRow g-0">
      <div class="col-9 gifting9">
        <h1 class="text-green hasty-font mb-sm-5 mb-2 fs-90">Gifting</h1>
        <p class="text-green text-justify fs-25">Gifting is one of the most convenient and widely used modes of
          connection with business partners, clients, employees and friends. In recent times, Conventional gifting ideas
          have paved the way that carry a message within. OnFleek offers innovative and refreshing ideas with specified
          requirements and constraints. We are here to provide a comprehensive list of gifting options.
        </p>
        <a href="contact.php" class="btn bg-green px-sm-4 py-sm-2 py-1 mt-4 px-2 fs-25 w-150">Book Now</a>
      </div>
      <div class="col-3">
        <img src="images/giftingLeft.jpg" class="img-fluid w-100" alt="gifting">
      </div>
    </div>
  </section>
</section>
<?php require_once('footer.php'); ?>
<div class="modal fade rounded-0 loginMdl" id="careerMdl">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0">
      <div class="modal-header justify-content-center border-bottom-0 pb-0">
        <h1 class="modal-title fs-45 fw-bold" id="text-green">Career</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 pb-1 pt-0">
        <form method="post">
          <div class="">
            <label class="col-form-label fs-25">Name</label>
            <input type="text" name="name1" class="form-control rounded-0 fs-25">
          </div>
          <div class="">
            <label class="col-form-label fs-25">Email Address</label>
            <input type="text" name="email1" class="form-control rounded-0 fs-25">
          </div>
          <div class="">
            <label class="col-form-label fs-25">Phone Number</label>
            <input type="text" name="mobile" class="form-control rounded-0 fs-25">
          </div>
          <div class="">
            <label name="password1" class="col-form-label fs-25">Upload Your CV</label>
            <input type="file" class="form-control rounded-0 fs-25" name="uploadCv">
          </div>
          <div class="text-center py-4">
            <button type="submit" name="signup" class="btn bg-green rounded-0 fs-25 w-110 btn-sm">Submit</button>
            <button type="button" class="btn bg-outline-green rounded-0 fs-25 w-110 btn-sm ms-sm-3 ms-1"
              data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>