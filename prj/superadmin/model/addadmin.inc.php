<?php
include '../../includes/config.php';
if(isset($super)){
$username = clear($db , $_POST['username']);
$password = clear($db , $_POST['password']);
$id_college = clear($db , $_POST['id_college']);
$rule = clear($db , $_POST['rule']);
if(empty($username) || empty($password) || empty($id_college) || empty($rule)){
    exit("تکایە خانەکان بە جوانی پڕ بکەوە");
    die();
}
if($rule <= 0){
    exit("ڕوول گونجاو نییە");
    die();
}
if($id_college <= 0){
    exit("کۆلێژ گونجاو نییە");
    die();
}
$hashpassword =  hash('gost', $password);
$query = mysqli_query($db ,"INSERT INTO `admin`(`username`,`password`,`viewpassword`,`id_college`,`rule`)VALUES('$username','$hashpassword','$password','$id_college','$rule')");
if($query){
    exit("success");
    die();
}else{
    exit(mysqli_error($db));
    die();
}
}else{
    exit("پێویستە بچیتە ژوورەوە");
}?>