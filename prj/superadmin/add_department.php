<?php include 'includes/nav.php'; if(!isset($super)){header("Location:index.php");} $id_college = clear($db , $_GET['id_college']); if(empty($id_college)){header("Location:add_college.php");}?>
<div class="container mt-3">
  <div class="card text-center">
    <div class="card-body p-2 text-center">
      <img src="assets/img/college.svg" width="100">
      <h4><?php getNames($db  , " colleges WHERE `id_college` = $id_college","name_college");?></h4>
      <div class="form-group mt-3">
        <input type="text" id="name_departments" class="form-control text-right w-100" placeholder="ناوی بەش">
      </div>
      <div class="form-group mt-3 text-right">
      <label>چەند قۆناغە</label>
      <input type="text" id="stage" class="text-dark form-control text-right w-100" placeholder="4">
      </div>
      <span id="adddepartment" class="btn btn-success w-100">زیادکردنی بەش</span>
    </div>
  </div>
</div>
<div class="row m-5 justify-content-center">
  <?php $query = mysqli_query($db , "SELECT * FROM department WHERE `id_college` = '$id_college' ORDER BY date_of_created_department DESC");
while($row = mysqli_fetch_assoc($query)):
 $id_college = clear($db ,$row['id_college']);
 $id_departments = clear($db , $row['id_departments']);
 ?>
  <div class="card shadow-sm shadow--hover p-2 radius-20 text-center m-2" style="width: 18rem;">
    <div class="card-body">
    <a href="#" style="position: absolute;top: 0;left: 0;" class="m-2 text-danger fa fa-remove"></a>
      <img src="assets/img/dept.svg" width="100">
      <h5 class="card-title"><?php echo $row['name_departments'];?></h5>
      <p class="card-text text-left">Num Of Student :<?php getRows($db , "student WHERE `id_departments` = '$id_departments' ");?></p>
      <p class="card-text text-left">Num Of Stage : <?php echo clear($db , $row['stage']);?></p>
      <p class="card-text text-left">Students : <a href="add_student.php?stage=<?php echo clear($db , $row['stage']);?>&id_college=<?php echo $id_college;?>&id_departments=<?php echo $id_departments;?>">Add :: View</a></p>
      <p class="card-text text-left">Subject : <a href="add_subject.php?stage=<?php echo clear($db , $row['stage']);?>&id_college=<?php echo $id_college;?>&id_departments=<?php echo $id_departments;?>" class="text-success">Add :: View</a></p>
    </div>
  </div>
  <?php endwhile ?>
</div>
<script>
 var id_college = <?php echo json_encode($id_college); ?>;  
</script>

<?php include 'includes/footer.php';?>
