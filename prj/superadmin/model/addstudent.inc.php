<?php
include '../../includes/config.php';
if(isset($super)){
$fullname = clear($db , $_POST['fullname']);
$username = clear($db , $_POST['username']);
$password = clear($db , $_POST['password']);
$classdep = strtoupper(clear($db , $_POST['classdep']));
$stage = clear($db , $_POST['stage']);
$id_college = clear($db , $_POST['id_college']);
$id_departments = clear($db , $_POST['id_departments']);
$stageurl = clear($db , $_POST['stageurl']);
if(empty($fullname) || empty($username) || empty($password) || empty($classdep) || empty($stage) || empty($id_college) || empty($id_departments) || empty($stageurl)){
    exit("تکایە خانەکان پڕ بکەوە");
    die();
}
if($stage > $stageurl || $stage <= 0){
    exit("قۆناغەکە گونجاو نییە");
    die();
}
if(strlen($fullname) < 8){
    exit("ناوەکە گونجاو نییە");
    die();
}
$hashpassword =  hash('gost', $password);
$query = mysqli_query($db , "INSERT INTO `student`(`fullname`,`username`,`password`,`viewpassword`,`id_college`,`id_departments`,`stage`,`class`)VALUES('$fullname','$username','$hashpassword','$password','$id_college','$id_departments','$stage','$classdep')");
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