<?php
include '../../includes/config.php';
$code = clear($db , $_POST['code']);
if(empty($code)){
    exit("تکایە دڵنیابەرەوە لە کۆدەکە");
    die();
}else{
    $code = hash('gost', $code); 
    $query = mysqli_query($db , "SELECT * FROM superadmin WHERE `code` = '$code'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['super'] = $row['id'];
        }
        exit("success");
        die();
    }else{
        exit("هەڵەیە");
        die();
    }
}
?>