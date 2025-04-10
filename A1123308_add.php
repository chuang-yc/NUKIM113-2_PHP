<html>
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
</head>

<?php

$sName = $_POST["name"];
$sAddress = $_POST["address"];
$sBirthday = $_POST["birthday"];

$link = mysqli_connect('localhost','chuang','m2t7p3=325','a1123308'); 
//連接資料庫，mysql主機名稱、使用者名稱、密碼、預設資料庫名稱

mysqli_set_charset($link,'utf8');
$sql = "INSERT INTO info (name, address, birthday) VALUES ('".$sName."','".$sAddress."','".$sBirthday."')";
//SQL語法，新增一筆紀錄到info，前面括號是欄位，後面是值
if(mysqli_query($link,$sql)){ 
    header("Location:A1123308_admin.php");
}

?>

</html>