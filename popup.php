<?php 
if(isset($_POST['signup'])){
  $name=$_POST['name1'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email1'];
  $password=$_POST['password1'];
  $sql="INSERT into regestered_user(name,email,phone,password,created_at) VALUES('$name','$email','$mobile','$password',NOW())";
  $pdo->query($sql);
}
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT name,email,password FROM regestered_user where email='$email' and is_active=0 LIMIT 1";
  $result=$pdo->query($sql);
  $data=$result->fetch();
  if($data['email']  == $email){
    if($data['password'] == $password){
      $_SESSION['user_name']=$data['name'];
    }
  }
}
 // for logout
if(isset($_POST['logout'])){
  unset($_SESSION['user_name']);
}
?>   
<!-- start login modal -->
<div class="modal fade rounded-0 loginMdl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0">
      <div class="modal-header justify-content-center border-bottom-0 pb-0">
        <h1 class="modal-title fs-45 fw-bold text-dark" id="exampleModalLabel text-green">Log-in to your account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 pb-1 pt-0">
        <form method="post">
          <div class="">
            <label class="col-form-label fs-25 text-dark">Email</label>
            <input type="text" name="email" class="form-control rounded-0 fs-25>
          </div>
          <div class="">
            <label name="password" class="col-form-label fs-25 text-dark">Password</label>
            <input type="password" class="form-control rounded-0 fs-25" name="password">
          </div>
          <div class="text-center pt-4">
          <button type="submit" class="btn bg-green rounded-0 fs-25 w-110 btn-sm" name="login">Login</button>
          <button type="button" class="btn bg-outline-green rounded-0 fs-25 w-110 btn-sm ms-sm-3 ms-1" data-bs-dismiss="modal">Close</button>
          </div>
          <div class="text-center pt-3">
          <p class="fs-25 text-green">Not a member? <a href="javascript:void(0)" class="text-decoration-none text-green"  data-bs-toggle="modal" data-bs-target="#exampleModalsignup">Sign Up</a></p> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end login modal -->
<!-- start registration modal -->
<div class="modal fade rounded-0 loginMdl" id="exampleModalsignup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0">
      <div class="modal-header justify-content-center border-bottom-0 pb-0">
        <h1 class="modal-title fs-45 fw-bold text-dark" id="exampleModalLabel text-green">Create an account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 pb-1 pt-0">
        <form method="post">
          <div class="">
            <label class="col-form-label fs-25 text-dark">Name</label>
            <input type="text" name="name1" class="form-control rounded-0 fs-25">
          </div>
          <div class="">
            <label class="col-form-label fs-25 text-dark">Email Address</label>
            <input type="text" name="email1" class="form-control rounded-0 fs-25">
          </div>
          <div class="">
            <label class="col-form-label fs-25 text-dark">Phone Number</label>
            <input type="text" name="mobile" class="form-control rounded-0 fs-25">
          </div>
          <div class="">
            <label name="password1" class="col-form-label fs-25 text-dark">Password</label>
            <input type="password" class="form-control rounded-0 fs-25" name="password1">
          </div>
          <div class="text-center pt-4">
          <button type="submit" name="signup" class="btn bg-green rounded-0 fs-25 w-110 btn-sm">Sign Up</button>
          <button type="button" class="btn bg-outline-green rounded-0 fs-25 w-110 btn-sm ms-sm-3 ms-1" data-bs-dismiss="modal">Close</button>
          </div>
          <div class="text-center pt-3">
          <p class="fs-25 text-green">Already have an account? <a href="javascript:void(0)" class="text-decoration-none text-green"  data-bs-toggle="modal" data-bs-target="#exampleModalsignup">Login</a></p> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end registration modal -->
