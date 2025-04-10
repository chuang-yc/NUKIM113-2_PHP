<html>
<head>
    <meta charset="UTF-8">
</head>
</html>

<?php
$no = $_POST["no"];
$sName = $_POST["sName"];
$sAddress = $_POST["sAddress"];
$sBirthday = $_POST["sBirthday"];

$link = mysqli_connect('localhost','chuang','m2t7p3=325','a1123308'); 
mysqli_set_charset($link,'utf8');

$sql = "UPDATE info SET name='$sName', address='$sAddress', birthday='$sBirthday' WHERE no='$no'";
if(mysqli_query($link,$sql)){
    header("Location:A1123308_admin.php");
}
?>