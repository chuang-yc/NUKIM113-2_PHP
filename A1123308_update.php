<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
</head>

<?php
$no = $_GET["no"];
$link = mysqli_connect('localhost','chuang','m2t7p3=325','a1123308');
mysqli_set_charset($link,'utf8');
$sql = "SELECT * FROM info WHERE no='$no'";  //選出指定no的資料

if($result = mysqli_query($link,$sql)){
    while($row = mysqli_fetch_assoc($result)){
        $name = $row["name"];
        $address = $row["address"];
        $birthday = $row["birthday"];
    }
}
?>

<form action="A1123308_updateEx.php" method="POST">
    <input type="hidden" name="no" value='<?php echo $no?>'>
    更改資料<br/>
    姓名: <input type="text" name="sName" value='<?php echo $name?>'><br/>
    地址: <input type="text" name="sAddress" value='<?php echo $address?>'><br/>
    生日: <input type="date" name="sBirthday" value='<?php echo $birthday?>'><br/><br/>
    <input type="submit" value="確定修改">
</form>

<!-- <form action="updateEx.php" method="POST">
    更改資料<br/>
    姓名: <input type="text" name="sName" ><br/>
    地址: <input type="text" name="sAddress" ><br/>
    生日: <input type="date" name="sBirthday" ><br/><br/>
    <input type="submit" value="確定修改">
</form> -->
</html>