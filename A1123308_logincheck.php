<?php
session_start();

$defaultName="nuk";
$defaultPwd="111";

$adminName="admin";
$adminPwd="111";

$userName=$_POST["userName"];
$userPwd=$_POST["userPassword"];

if($defaultName==$userName && $defaultPwd==$userPwd){
    echo $userName. "登入成功";
    $_SESSION["check"]=2;
    $cookiedate=strtotime("+1 min", time());
    //setcookie("userName", $defaultName, time()+15); //("cookie名字", 輸入值, 保留時間)
    setcookie("userName", $defaultName, $cookiedate);
    header("Location:A1123308_form.php");
}elseif($adminName==$userName && $adminPwd==$userPwd){
    echo $adminName. "登入成功";
    $_SESSION["check"]=1;
    $cookiedate=strtotime("+1 min", time());
    setcookie("userName", $adminName, $cookiedate);
    header("Location:A1123308_admin.php");
}else{
    echo "<center>登入失敗，三秒後回上頁</center>";
    header("Refresh:3 ; url=A1123308_login.php");
}

?>