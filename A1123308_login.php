<?php
if(isset($_COOKIE["userName"])){          //檢查cookie是否存在
    echo "歡迎回來". $_COOKIE["userName"];
}
?>

<h1>登入系統</h1>
<form action="A1123308_logincheck.php" method="post">
<?php
date_default_timezone_set("Asia/Taipei");
echo time();
echo "<br>";
echo "現在時間: ";
echo date("Y/m/d H:i:s");
echo "<br><br>";
?>
帳號:<input type="text" name="userName"><br/>
密碼:<input type="password" name="userPassword"><br/><br/>
<input type="submit">
</form>

