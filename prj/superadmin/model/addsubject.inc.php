<?php
include '../../includes/config.php';
if(isset($super)){
$id_college = clear($db , $_POST['id_college']);
$stage = clear($db , $_POST['stage']);
$id_departments = clear($db , $_POST['id_departments']);
$name_subject = clear($db , $_POST['name_subject']);
$stage_num = clear($db , $_POST['stage_num']);
if(empty($id_college) || empty($stage) || empty($id_departments) || empty($name_subject) || empty($stage_num)){
    exit("خانەکان پڕ بکەوە");
    die();
}
if($stage_num > $stage || $stage < 0){
    exit("قۆناغەکە گونجاو نییە");
    die();
}
$query = mysqli_query($db , "INSERT INTO `subject`(`name_subject`,`stage`,`id_college`,`id_departments`) VALUES ('$name_subject','$stage_num','$id_college','$id_departments')");
if($query){
    exit("success");
    die();
}else{
    exit(mysqli_error($db));
    die();
}
}else{
    exit("پێویستە بچیتە ژوورەوە");
} ?>