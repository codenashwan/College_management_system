<?php include 'includes/nav.php';
if(!isset($super)){header("Location:index.php");}
$id_college = clear($db , $_GET['id_college']);
$stageurl = clear($db , $_GET['stage']);
$id_departments = clear($db , $_GET['id_departments']);
if(empty($id_college) || empty($id_departments)){
header("Location:add_college.php");
}?> 
<div class="container mt-5">
    <div class="card text-center">
        <div class="card-body p-2 text-center">
            <img src="assets/img/student.svg" width="100">
            <h4>زیادکردنی خوێندکار بۆ : <?php getNames($db  , "department WHERE `id_departments` = $id_departments","name_departments");?></h4>
            <div class="form-group mt-3">
                <input type="text" id="fullname"  class="form-control text-right w-100" placeholder="ناوی تەواوی خویندکار">
            </div>
            <div class="form-group mt-3">
            <label>Username</label>
                <input type="text"  id="username" value="<?php echo rand();?>" class="form-control text-right w-100" placeholder="Username">
            </div>
            <div class="form-group mt-3">
            <label>Password</label>
                <input type="text" id="password" value="<?php echo rand();?>" class="form-control text-right w-100" placeholder="Password">
            </div>
            <div class="form-group mt-3">
                <input id="class" type="text" class="form-control text-right w-100" placeholder="گروپ A:B:C:D">
            </div>
            <div class="form-group mt-3 text-right">
                <label>قۆناغی چەندە</label>
                <input type="text"  id="stage" class="text-dark form-control text-right w-100"placeholder="1 to <?php echo $stageurl;?>">
            </div>
            <span id="addstudent" class="btn btn-warning w-100">زیادکردنی بەش</span>
        </div>
    </div>
</div>

<div class="row m-5 justify-content-center">
  <?php $query = mysqli_query($db , "SELECT * FROM `student` WHERE `id_college` = '$id_college' AND `id_departments` = '$id_departments' ORDER BY date_of_created DESC");
while($row = mysqli_fetch_assoc($query)):
 ?>
  <div class="card shadow-sm shadow--hover p-2 radius-20 text-center m-2" style="width: 18rem;">
    <div class="card-body">
    <a href="#" style="position: absolute;top: 0;left: 0;" class="m-2 text-danger fa fa-remove"></a>
      <img src="assets/img/student.svg" width="100">
      <h5 class="card-title"><?php echo clear($db , $row['fullname']);?></h5>
      <p class="card-text text-left">Username : <?php echo clear($db, $row['username']);?></p>
      <p class="card-text text-left">Password : <?php echo clear($db, $row['viewpassword']);?></p>
      <p class="card-text text-left">Stage : <?php echo clear($db, $row['stage']);?></p>
      <p class="card-text text-left">Class : <?php echo clear($db, $row['class']);?></p>
    </div>
  </div>
  <?php endwhile ?>
</div>


<?php include 'includes/footer.php';?>
<script>
var id_college = <?php echo json_encode($id_college); ?>;  
var id_departments = <?php echo json_encode($id_departments); ?>;  
var stageurl = <?php echo json_encode($stageurl); ?>;  
</script>