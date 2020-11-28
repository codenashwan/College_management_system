<?php
include '../../includes/config.php';
if(isset($super)){
$name_departments = clear($db , $_POST['name_departments']);
$id_college = clear($db , $_POST['id_college']);
$stage = clear($db , $_POST['stage']);
if(empty($name_departments) || empty($id_college) || empty($stage)){
    exit("تکایە خانەکان بە جوانی پڕ بکەوە");
}else{
    $query = mysqli_query($db , "INSERT INTO department(`id_college` , `name_departments` , `stage`) VALUES ('$id_college' , '$name_departments' , '$stage')");
    if($query){
        exit("success");
    }else{
        exit(mysqli_error($db));
    }
}
}else{
    exit("پێویستە بچیتە ژوورەوە");
} ?>