<?php
$no = $_GET["no"];

$link = mysqli_connect('localhost','chuang','m2t7p3=325','a1123308');
mysqli_set_charset($link,'utf8');

$sql = "DELETE FROM info WHERE no='".$no."'"; //SQL語法，刪除指定no的資料
if(mysqli_query($link,$sql)){
    header("Location:A1123308_admin.php");
}
?>