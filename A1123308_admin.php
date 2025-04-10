<html>
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
</head>

<form action="A1123308_add.php" method="POST">
    新增資料<br/>
    姓名: <input type="text" name="name"><br/>
    地址: <input type="text" name="address"><br/>
    生日: <input type="date" name="birthday"><br/><br/>
    <input type="submit" value="新增資料">
</form>

<?php
if(isset($_SESSION["check"]) && $_SESSION["check"]==1){
    echo "歡迎回來<br>";
    echo "現在時間: ";
    echo date("Y/m/d H:i:s");
    echo "<br><br>";

    $link = @mysqli_connect('localhost','chuang','m2t7p3=325','a1123308');
    //連接資料庫，mysql主機名稱、使用者名稱、密碼、預設資料庫名稱

    // if(!mysqli_select_db($link,'a1123308')){
    //     echo "資料庫選擇失敗<br>";
    // }else{
    //     echo "資料庫選擇成功<br>";
    // }

    $sql = "SELECT * FROM info";  //SQL語法，從info資料表中選取所有資料
    mysqli_set_charset($link,'utf8');  //設定編碼
    if($result = mysqli_query($link,$sql)){  
        echo "<table border='1'>";
        while($row = mysqli_fetch_assoc($result)){ 
            echo "<tr>";
            echo "<td>".$row["no"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["birthday"]."</td><td><a href='A1123308_del.php?no=".$row["no"]."'>刪除</a></td><td><a href='A1123308_update.php?no=".$row["no"]."'>修改</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}else{
    echo "<center>非法使用者，兩秒後進入登入頁面</center>";
    header("Refresh:2 ; url='A1123308_login.php'");
}

echo "<br>";
echo "<a href='A1123308_logout.php'>Logout</a><br>";

?>
</html>