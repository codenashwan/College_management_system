<?php
include '../../includes/config.php';
if(isset($super)){
$name_college = clear($db , $_POST['name_college']);
if(empty($name_college)){
    exit("تکایە ناوی کۆلێژ بنوسە");
}else{
    $query = mysqli_query($db , "INSERT INTO colleges(`name_college`) VALUES ('$name_college')");
    if($query){
        exit("success");
    }else{
        exit(mysqli_error($db));
    }
}
}else{
    exit("پێویستە بچیتە ژوورەوە");
} ?>