<?php
session_start();
?>

<html>
<head>
    <title>資管迎新報名表</title>
    <meta charset="utf-8">
</head>
<body bgcolor="#fbeef">
<?php
if(isset($_SESSION["check"]) && $_SESSION["check"]==2){
    echo "<center>";
    echo "<h1>資管迎新活動報名表</h1>";
    echo "</center>";

    echo "<h3>活動流程</h3>";
    echo "<table border='1' width='400'>";
    echo "<tr><td>12:00-13:00</td><td>報到、午餐</td></tr>";
    echo "<tr><td>13:10-13:40</td><td>資管系系所、課程和師資介紹</td></tr>";
    echo "<tr><td>13:40-14:00</td><td>破冰小遊戲</td></tr>";
    echo "<tr><td>14:10-14:40</td><td>系上活動介紹</td></tr>";
    echo "<tr><td>14:50-15:20</td><td>幹部介紹與選舉</td></tr>";
    echo "<tr><td>15:20-15:30</td><td>結語</td></tr>";
    echo "</table>";

    echo "<h3>報名表單</h3>";
    echo "<form action='A1123308_userinfo.php' action='A1123308_admin.php' method='POST'>";
    echo "姓名: <input type='text' name='uName'><br/>";
    echo "學號: <input type='text' name='uNum'><br/>";
    echo "信箱: <input type='email' name='email'><br/>";
    echo "生日: <input type='date' name='date'><br/>";
    echo "性別: 男<input type='radio' name='gender' value='男'> 女<input type='radio' name='gender' value='女'><br/>";
    echo "用餐需求: 葷<input type='radio' name='meal' value='葷'> 素<input type='radio' name='meal' value='素'><br/>";

    echo "興趣: ";
    echo "讀書<input type='checkbox' name='interests' value='讀書'>";
    echo "音樂<input type='checkbox' name='interests' value='音樂'>";
    echo "運動<input type='checkbox' name='interests' value='運動'><br/>";

    echo "居住地區: ";
    echo "<select name='city'>";
    echo "<option value='北'>北</option>";
    echo "<option value='中'>中</option>";
    echo "<option value='南'>南</option>";
    echo "<option value='東'>東</option>";
    echo "</select>";
    echo "<br/>";

    echo "想說的話:<br/>";
    echo "<textarea cols='50' rows='10' name='comment'></textarea><br/><br/>";
    echo "<input type='submit'> <input type='reset'>";
    echo "</form>";

    echo "<a href='A1123308_logout.php'>Logout</a>";

}else{
    echo "<center>非法使用者，兩秒後進入登入頁面</center>";
    header("Refresh:2 ; url='A1123308_login.php'");
}
?>


</body>
</html>