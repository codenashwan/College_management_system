<?php include 'includes/nav.php'; if(!isset($super)){header("Location:index.php");} ?>

<div class="mt-5">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row">
      <?php 
      $list = ['colleges' , 'department' , 'student'  , 'subject' , 'admin'];
      $img = ['college' , 'dept' , 'student', 'subject' , 'admin'];
      for($i = 0 ; $i<count($list) ; $i++):?>
        <div  class="col-xl-4 col-lg-6 mt-3">
          <div class="card mb-4 border-0 radius-20 bg-gradient-lighter shadow-sm mb-xl-0">
            <div class="card-body ">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase mb-0"><?php echo $list[$i];?></h5>
                  <span class="h2 font-weight-bold mb-0"><?php getRows($db, "$list[$i]");?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape rounded-circle">
                    <img src="assets/img/<?php echo $img[$i];?>.svg" width="50">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php';?>