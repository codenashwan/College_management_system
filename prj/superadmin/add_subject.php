<?php include 'includes/nav.php';
if(!isset($super)){header("Location:index.php");}
$id_college = clear($db , $_GET['id_college']);
$stage = clear($db , $_GET['stage']);
$id_departments = clear($db , $_GET['id_departments']);
if(empty($id_college) || empty($id_departments)){
header("Location:add_college.php");
}?>

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-body p-2 text-center">
            <img src="assets/img/subject.svg" width="100">
            <h4><?php getNames($db  , "department WHERE `id_departments` = $id_departments","name_departments");?></h4>
            <div class="form-group mt-3">
                <input type="text" id="name_subject" class="form-control text-right w-100" placeholder="ناوی وانە">
            </div>
            <div class="form-group mt-3 text-right">
                <label>قۆناغی وانە </label>
                <input type="text" id="stage_num" class="text-dark form-control text-right w-100"
                    placeholder="1 to <?php echo $stage;?>">
            </div>
            <span id="addsubject" class="btn btn-primary w-100">زیادکردنی بەش</span>
        </div>
    </div>
</div>

<div class="row m-2 justify-content-center">
    <?php function getSubjectUsingStage($dbb, $id_college,$id_departments,$condition){?>
    <table class="table m-2 col-2 mt-5 bg-primary shadow--hover text-white radius-20 table-borderless">
        <thead>
            <tr>
                <th scope="col">Subject S<?php echo $condition;?></th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
  $query = mysqli_query($dbb , "SELECT * FROM `subject` WHERE `id_college` = '$id_college' AND `id_departments` = '$id_departments' AND `stage` = '$condition' ORDER BY `date_of_created_subject` DESC");
 while($row = mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?php echo clear($dbb , $row['name_subject']);?></td>
                <td><a href="" class="text-danger">Delete</a></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    <?php } ?>

<?php
for($i = 1 ; $i<=$stage ; $i++){
getSubjectUsingStage($db ,$id_college,$id_departments,$i);
}
?>
</div>
<script>
 var id_college = <?php echo json_encode($id_college); ?>;  
 var stage = <?php echo json_encode($stage); ?>;  
 var id_departments = <?php echo json_encode($id_departments); ?>;  
</script>
<?php include 'includes/footer.php';?>
