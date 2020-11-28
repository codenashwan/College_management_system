<?php include 'includes/nav.php'; if(!isset($super)){header("Location:index.php");}?>
<div class="container mt-5">
  <div class="card  text-center">
    <div class="card-body p-2 text-center">
      <img src="assets/img/admin.svg" width="100">
      <h4>زیادکردنی ئەدمین بۆ کۆلێژەکان</h4>
      <div class="form-group mt-3">
        <input type="text" id="username" class="form-control text-right w-100" placeholder="Username">
      </div>
      <div class="form-group mt-3">
        <input type="password" id="password" class="form-control text-right w-100" placeholder="Password">
      </div>
      <div class="form-group mt-3">
        <select id="id_college" class="form-control">
          <option>ناوی کۆلێژ</option>
          <?php $query =mysqli_query($db , "SELECT * FROM colleges ORDER BY date_of_created_college DESC");
            while($row = mysqli_fetch_assoc($query)){
             echo '<option value="'.clear($db , $row['id_college']).'">'.clear($db , $row['name_college']).'</option>';
            }?>
        </select>
        <div class="form-group mt-3">
          <select id="rule" class="form-control">
            <option value="1">Rule 1</option>
            <option value="2">Rule 2</option>
            <option value="3">Rule 3</option>
          </select>
        </div>
      </div>
      <span id="addadmin" class="btn btn-warning w-100">زیادکردنی بەش</span>
    </div>
  </div>
</div>


<div class="row m-5 justify-content-center">
  <?php $query = mysqli_query($db , "SELECT * FROM `admin` ad JOIN `colleges` cl on ad.id_college = cl.id_college  ORDER BY date_of_created_admin DESC");
while($row = mysqli_fetch_assoc($query)):
 ?>
  <div class="card shadow-sm shadow--hover p-2 radius-20 text-center m-2" style="width: 18rem;">
    <div class="card-body">
      <a href="#" style="position: absolute;top: 0;left: 0;" class="m-2 text-danger fa fa-remove"></a>
      <img src="assets/img/admin.svg" width="100">
      <p class="card-text text-left">Username : <?php echo clear($db, $row['username']);?></p>
      <p class="card-text text-left">Password : <?php echo clear($db, $row['viewpassword']);?></p>
      <p class="card-text text-left">College : <?php echo clear($db, $row['name_college']);?></p>
      <p class="card-text text-left">Rule : <?php echo clear($db, $row['rule']);?></p>
    </div>
  </div>
  <?php endwhile ?>
</div>


<?php include 'includes/footer.php';?>