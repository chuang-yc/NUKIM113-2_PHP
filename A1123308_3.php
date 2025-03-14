<?php

$uName = $_POST["uName"];
$uNum = $_POST["uNum"];
$uEmail = $_POST["email"];
$uBri = $_POST["date"];
$uGender = $_POST["gender"];
$uMeal = $_POST["meal"];
$uInterests = isset($_POST["interests"]) ? (array) $_POST["interests"] : [];
//isset回傳布林值
$uCity = $_POST["city"];
$uComment = $_POST["comment"];

echo "姓名: ". $uName. "<br>";
echo "學號: ". $uNum. "<br>";
echo "信箱: ". $uEmail. "<br>";
echo "生日: ". $uBri. "<br>";
echo "性別: ". $uGender. "<br>";
echo "居住地區: ". $uCity. "<br>";

if (count($uInterests) == 0) {
    echo "沒有興趣<br>";
} else {
    echo "興趣: ";
    foreach ($uInterests as $interest) {
        echo htmlspecialchars($interest). " ";
    }
    echo "<br>";
}

echo "想說的話:<br>". nl2br($uComment). "<br>";
?>