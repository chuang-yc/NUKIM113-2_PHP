<html>
<head>
    <title>資管迎新報名表</title>
    <meta charset="utf-8">
</head>

<body bgcolor="#fbeef">
    <center>
    <h1>資管迎新活動報名表</h1>
    </center>

    <h3>活動流程</h3>
    <table border="1" width="400">
        <tr><td>12:00-13:00</td><td>報到、午餐</td></tr>
        <tr><td>13:10-13:40</td><td>資管系系所、課程和師資介紹</td></tr>
        <tr><td>13:40-14:00</td><td>破冰小遊戲</td></tr>
        <tr><td>14:10-14:40</td><td>系上活動介紹</td></tr>
        <tr><td>14:50-15:20</td><td>幹部介紹與選舉</td></tr>
        <tr><td>15:20-15:30</td><td>結語</td></tr>
    </table>

    <h3>報名表單</h3>
    <form action="A1123308_3.php" method="POST">
        姓名: <input type="text" name="uName"><br/>
        學號: <input type="text" name="uNum"><br/>
        信箱: <input type="email" name="email"><br/>
        生日: <input type="date" name="date"><br/>
        性別: 男<input type="radio" name="gender" value="男"> 女<input type="radio" name="gender" value="女"><br/>
        用餐需求: 葷<input type="radio" name="meal" value="葷"> 素<input type="radio" name="meal" value="素"><br/>

        興趣:
        讀書<input type="checkbox" name="interests" value="讀書">
        音樂<input type="checkbox" name="interests" value="音樂">
        運動<input type="checkbox" name="interests" value="運動"><br/>

        居住地區:
        <select name="city">
            <option value="北">北</option>
            <option value="中">中</option>
            <option value="南">南</option>
            <option value="東">東</option>
        </select>
        <br/>

        想說的話:<br/>
        <textarea cols="50" rows="10" name="comment"></textarea><br/><br/>
        <input type="submit"> <input type="reset">
    </form>


</body>
</html>