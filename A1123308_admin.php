<?php
session_start();

if(isset($_SESSION["check"]) && $_SESSION["check"]==1){
    echo "歡迎回來<br>";
    echo "現在時間: ";
    echo date("Y/m/d H:i:s");
    echo "<br><br>";
    echo "<a href='A1123308_logout.php'>Logout</a><br>";

}else{
    echo "<center>非法使用者，兩秒後進入登入頁面</center>";
    header("Refresh:2 ; url='A1123308_login.php'");
}

?>