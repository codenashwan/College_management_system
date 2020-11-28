<?php
include '../includes/config.php';

$username = clear($db , $_POST['username']);
$password = clear($db , $_POST['password']);

if(empty($username) || empty($password)){
    exit("تکایە دڵنیابەرەوە لە خانەکان");
    die();
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM student WHERE `username` = '$username' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['userid'] = $row['id'];
        }
        exit("success");
        die();
    }else{
        exit("ئەم بەکارهێنەرە بوونی نییە");
        die();
    }
}
?>