<?php include 'includes/nav.php'; if(isset($userid)){header("Location:profile.php");} ?>

<div class="container" style="margin-top:160px">
  <div class="col-lg-6 col-sm m-auto shadow-sm bg-white radius-20 p-4 text-center">
  <img id="image" src="assets/img/card.svg" width="120">
  <p class="text-danger alert" style="display:none">jj</p>
    <div class="form-group mt-3">
      <input type="test" id="username" class="form-control w-100 radius-20 shadow-sm border-0" placeholder="Enter Username">
    </div>
    <div class="form-group mt-3">
      <input type="password" id="password" class="form-control w-100 radius-20 shadow-sm border-0" placeholder="Enter Password">
    </div>
    <span id="login" class="btn btn-dark w-100 shadow-none radius-20 border-0">LOGIN</span>
  </div>
</div>

<?php include 'includes/footer.php';?>