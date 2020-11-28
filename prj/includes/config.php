<?php
session_start();
ob_start();
$db = mysqli_connect('localhost' , 'root' , '' , 'college');
$db->query("SET NAMES 'utf8'");
$db->query("SET CHARACTER SET utf8");
ini_set('default_charset','UTF-8'); 
if(!$db){
    exit("Error Connect To Database");
    echo mysqli_error_connet($db);
}
function clear($dbb , $data){
    $dataa = mysqli_real_escape_string($dbb,htmlspecialchars($data));
    return $dataa;
}
if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}
if(isset($_SESSION['super'])){
    $super = $_SESSION['super'];
}
if(isset($super)){
    function getRows($dbb, $condition){
        $query = mysqli_query($dbb , "SELECT * FROM  $condition ");
        $result = mysqli_num_rows($query);
        echo $result;
    }
}
if(isset($super)){
    function getNames($dbb, $condition,$conditionname){
        $query = mysqli_query($dbb , "SELECT * FROM  $condition ");
        while($row = mysqli_fetch_assoc($query)){
            $name = $row[$conditionname];
            echo $name;
        }
      
    }
}
if(isset($_GET['logout'])){
    session_unset();
    unset($_SESSION['userid']);
    session_destroy();
    header('Location:index.php');
    }

  
?>