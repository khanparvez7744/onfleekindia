<?php require_once('header.php'); ?>
<?php
if(isset($_POST['formsubmit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $category=$_POST['category'];
    $print=0;
    $gift=0;
    $location=0;
    $print = $_POST['print'];
    if(isset($_POST['gift'])){
    $gift = $_POST['gift'];
    }
    $date=$_POST['date'];
    $location=$_POST['location'];
    $message=$_POST['message'];
    if($category == 'Gifting'){
        $sql="INSERT INTO connected_people (name,mobile,email,occassion,date,location_type,message,created_at) VALUES ('$name','$phone','$email','$category','$date','$gift','$message',NOW())";
    }
    elseif($category == 'Printing'){
        $sql="INSERT INTO connected_people (name,mobile,email,occassion,date,location_type,message,created_at) VALUES ('$name','$phone','$email','$category','$date','$print','$message',NOW())";
    }
    else{
    $sql="INSERT INTO connected_people (name,mobile,email,occassion,date,location_type,message,created_at) VALUES ('$name','$phone','$email','$category','$date','$location','$message',NOW())";
    }
        if($pdo->query($sql))
        {
        echo "<script type='text/javascript'>
            $(document).ready(function(){
                $('#contModal').modal('show');
            });
        </script>";
        $to = "dheeraj@sociapa.com,Sonakshi@sociapa.com,web@sociapa.com";
        $from       = 'info@onfleekindia.com';
        $fromname   = 'OnFleek';
        $subject = "'You\'ve been contacted by $name";
        $headers = "From: ".$fromname." <".$from."> \r\n";
        $headers   .= "Reply-To: ". $email . "\r\n";
        $headers   .= "MIME-Version: 1.0\r\n";
        $headers   .= "Content-type: text/html; charset=utf-8\r\n";
        $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
        $msg  = "<table style='max-width:600px;width: 100%;'>\r\n\n";
        $msg .= "<tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n";
        $msg .= "<tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n";
        $msg .= "<tr><td>Event Type</td><td>:</td><td>".$category."</td></tr>\r\n\n";
        if(!empty($print)){
        $msg .= "<tr><td>Print Type</td><td>:</td><td>".$print."</td></tr>\r\n\n";
        }
        elseif(!empty($gift)){
        $msg .= "<tr><td>Gift Type</td><td>:</td><td>".$gift."</td></tr>\r\n\n";
        }
        elseif(!empty($location)){
           $msg .= "<tr><td>Location</td><td>:</td><td>".$location."</td></tr>\r\n\n";
        }
        $msg .= "<tr><td>Date</td><td>:</td><td>".$date."</td></tr>\r\n\n";
        $msg .= "<tr><td>Contact</td><td>:</td><td>".$phone."</td></tr>\r\n\n";
        $msg .= "<tr><td>Question</td><td>:</td><td>".$message."</td></tr>\r\n\n";
        $msg .= "-----------------------------------------\r\n";
        $result= mail($to,$subject,$msg,$headers);
  }
}
?>
    <section class="mainsec container">
       <section class="contSec py-sm-5 py-2 px-sm-5 px-2">
<div class="container">
    <div class="row">
        <div class="col-xl-7 px-5 py-2 py-sm-5">
            <h1 class="fs-60 hasty-font text-green mb-sm-5 mb-3">Enquiry</h1>
            <form class="row g-sm-5 g-0" method="POST">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <input type="text" class="form-control fs-25" name="name" placeholder="Name" required>
                       </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3 dropdown">
                        <select class="form-select border fs-25 pt-1" name="category" id="ddlServices" onclick="allService();" required>
                            <option>--Services--</option>
                            <option value="Event">Event & Exhibition</option>
                            <option value="Photography">Photography & Videography</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Printing">Printing Services</option>
                            <option value="Gifting">Gifting</option>
                            <option value="Celebrity">Talent Management</option>
                          </select>
                    </div>
                </div>
                <div class="col-sm-6" id="giftingCol">
                    <div class="mb-3 dropdown">
                        <select class="form-select border fs-25" name="gift">
                            <option value="" disabled selected>Select Gifting</option>
                            <option value="Newsletters">Newsletters</option>
                            <option value="Catalogues">Catalogues</option>
                            <option value="Brochures">Brochures</option>
                            <option value="Posters & banners">Posters & banners </option>
                            <option value="Marketing folders">Marketing folders</option>
                            <option value="Flyers">Flyers</option>
                            <option value="Postcards">Postcards</option>
                            <option value="Merchandises">Merchandises </option>
                            <option value="Booklets">Booklets</option>
                            <option value="Business cards">Business cards</option>
                            <option value="Manuals">Manuals</option>
                            <option value="Banner Stands">Banner Stands</option>
                          </select>
                    </div>
                </div>
                 <div class="col-sm-6" id="printingCol">
                    <div class="mb-3">
                        <input type="text" name="print" class="form-control fs-25" id="txtprint" placeholder="Want To Print">

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <input type="text" name="date" dateformat="d M y" class="form-control fs-25" id="txtLDate" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" placeholder="Date" required>

                    </div>
                </div>
                <div class="col-sm-6" id="locationCol">
                    <div class="mb-3">
                        <input type="text" name="location" class="form-control fs-25" id="txtLocation" placeholder="Location" required>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <input type="text" name="phone" class="form-control fs-25" maxlength="10" placeholder="Phone Number" required><span id="phonevalid"></span>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <input type="email" name="email" onkeypress="validateEmail()" class="form-control fs-25"  placeholder="Email Address" required><span id="emailvalid"></span>

                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <input type="text" name="message" class="form-control fs-25" id="txtmessage" placeholder="Message">

                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" name="formsubmit" class="btn bg-green fs-25 w-150">Submit</button>
                </div>
              </form>
            </div>
        <div class="col-xl-5 px-0 py-sm-0 py-0">
            <div class="bg-green py-sm-5 py-3">
            <h1 class="fs-60 hasty-font text-light mb-sm-5 mb-4 contHeading ms-sm-5 ms-0">Contact Us</h1>
            <div class="row">
                <div class="col-sm-12 py-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.513378766122!2d77.39362176770568!3d28.56932205939904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef1d2a5c2509%3A0xde5052f040aaef19!2sExcel%20Playschool%20and%20Daycare%2C%20Sector%20116%20Noida!5e0!3m2!1sen!2sin!4v1646731777405!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <hr class="w-75 mx-auto">
              <p class="text-center text-light fs-25 mb-sm-4">BL-02, Sector 116, Noida, Uttar Pradesh 201301</p>
              <p class="text-center text-light fs-25 mb-sm-4"><i class="fas fa-envelope-open"></i> info@onfleekindia.com</p>
              <p class="text-center text-light fs-25 mb-sm-4 mb-3"><i class="fas fa-phone-alt"></i> 7042960595</p>
                </div>

                <div class="col-sm-12 text-center sclIconCont">
                    <a href="https://www.facebook.com/profile.php?id=100073466440862" class="text-light text-decoration-none" target="_blank">
                        <i class="fab fa-facebook fa-3x"></i>
                    </a>
                    <a href=" https://www.instagram.com/india.onfleek/" class="text-light text-decoration-none ms-5" target="_blank">
                        <i class="fab fa-instagram fa-3x"></i>
                    </a>
                    <a href="https://www.twitter.com/onfleekinfo/" class="text-light text-decoration-none ms-5" target="_blank">
                        <i class="fab fa-twitter fa-3x"></i> </a>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>

       </section>
    </section>

        <div class="modal rounded-0 contactMdl" id="contModal" tabindex="-1" aria-labelledby="contModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
            <div class="modal-header justify-content-center border-bottom-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 text-center">
            <h2>Thanks !! We will get back soon !!!</h1>
            <button type="button" data-bs-dismiss="modal" class="btn bg-green rounded-0 fs-25 btn-sm mt-5 px-5">Ok</button>
            </div>
            </div>
        </div>
        </div>
    <?php require_once('footer.php'); ?>