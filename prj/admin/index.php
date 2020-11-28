<?php include 'includes/nav.php'; if(isset($super)){header("Location:home.php");} ?>

<div class="container" style="margin-top:160px">
  <div class="col-lg-6 col-sm m-auto bg-gradient-darker p-4 text-center">
  <img id="image" src="assets/img/college.svg" width="120">
  <p class="text-danger alert" style="display:none">jj</p>
    <div class="form-group mt-3">
      <input type="text" class="form-control w-100 border-0 rounded-0" placeholder="Your Username">
    </div>
    <div class="form-group mt-3">
      <input type="password" class="form-control w-100 border-0 rounded-0" placeholder="Your Password">
    </div>
    <span id="login" class="btn btn-white w-100 border-0 rounded-0">LOGIN</span>
  </div>
</div>

<?php include 'includes/footer.php';?> 