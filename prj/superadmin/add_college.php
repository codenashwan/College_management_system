<?php include 'includes/nav.php'; if(!isset($super)){header("Location:index.php");} ?>
<div class="container" style="margin-top:80px">
  <div class="col-lg-6 col-sm m-auto shadow-sm bg-white  p-4 text-center">
    <img src="assets/img/college.svg" width="100">
    <h3>زیادکردنی کۆلێژ</h3>
    <div class="form-group mt-3">
      <input type="text" id="name_college" class="form-control text-right w-100" placeholder="ناوی کۆلێژ">
    </div>
    <span id="addcollege" class="btn btn-success w-100">زیادکردن</span>
  </div>
</div>

<div class="row m-5 justify-content-center">
  <?php $query = mysqli_query($db , "SELECT * FROM colleges ORDER BY date_of_created_college DESC");
while($row = mysqli_fetch_assoc($query)): $id_college = clear($db ,$row['id_college']);?>
<!-- model -->
<div class="modal fade" id="exampleModal<?php echo $id_college;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-danger">
      <div class="modal-body text-center text-white">
      <h2><?php echo $id_college;?></h2>
        <p>بە سڕینەوەی کۆلێژەکە ئەوا هەموو بەشەکان و خوێندکاران ئەسڕێنەوە بۆیە تکایە دڵنیا بەرەوە </p>
        <span class="btn btn-white text-danger">سڕینەوە</span>
        <span class="btn btn-white text-primary">لابردن</span>
      </div>
    </div>
  </div>
</div>
<!-- end model -->
  <div class="card  shadow-sm shadow--hover p-2 radius-20 text-center m-2" style="width: 17rem;">
    <div class="card-body">
    <a data-toggle="modal" data-target="#exampleModal<?php echo $id_college;?>" href="#" style="position: absolute;top: 0;left: 0;" class="m-2 text-danger fa fa-remove"></a>
      <img src="assets/img/college.svg" width="100">
      <h5 class="card-title"><?php echo $row['name_college'];?></h5>
      <p class="card-text text-left">Num Of Dept : <?php getRows($db , "department WHERE `id_college` = '$id_college' ");?></p>
      <p class="card-text text-left">Num Of Student : <?php getRows($db , "student WHERE `id_college` = '$id_college' ");?></p>
      <p class="card-text text-left">Dept : <a href="add_department.php?id_college=<?php echo clear($db , $id_college);?>" class="text-primary">View :: Add</a></p>
    </div>
  </div>
  <?php endwhile ?>
</div>
<?php include 'includes/footer.php';?>