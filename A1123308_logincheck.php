<?php
session_start();
?>

<head>
    <meta charset="utf-8">
</head>

<?php
// $defaultName="nuk";
// $defaultPwd="111";

// $adminName="admin";
// $adminPwd="111";

$userName=$_POST["userName"];
$userPwd=$_POST["userPassword"];

$link = mysqli_connect('localhost','chuang','m2t7p3=325','a1123308'); 
//連接資料庫，mysql主機名稱、使用者名稱、密碼、預設資料庫名稱

$sql = "SELECT * FROM user WHERE userName='".$userName."' AND password='".$userPwd."'";
//SQL語法，從user資料表中選取userName和password符合的資料
$result = mysqli_query($link, $sql);
$record = mysqli_num_rows($result); //取得資料筆數

if($record==2){     //使用者登入
    echo $userName. "登入成功";
    $_SESSION["check"]=2;
    $cookiedate=strtotime("+1 min", time());
    //setcookie("userName", $defaultName, time()+15); //("cookie名字", 輸入值, 保留時間)
    setcookie("userName", $defaultName, $cookiedate);
    header("Location:A1123308_form.php");
}else               //管理者登入
if($record==1){
    echo $adminName. "登入成功";
    $_SESSION["check"]=1;     
    $cookiedate=strtotime("+1 min", time());
    setcookie("userName", $adminName, $cookiedate); //("cookie名字", 輸入值, 保留時間)
    header("Location:A1123308_admin.php");
}else{
    echo "<center>登入失敗，三秒後回上頁</center>";
    header("Refresh:3 ; url=A1123308_login.php");
}

?>