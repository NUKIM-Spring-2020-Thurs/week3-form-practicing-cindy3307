<?php

$name=$_POST["username"];
$sid=$_POST["student_id"];
$gender=$_POST["gender"];
$num1=$_POST["number1"];
$num2=$_POST["number2"];
$num3=$_POST["number3"];
$pla1=$_POST["place1"];
$pla2=$_POST["place2"];
$like=$_POST["like"];
$pho=$_POST["phonenum"];
$email=$_POST["email"];

echo "你的名字:".$name."<br/>";
echo "你的學號:".$sid."<br/>";
echo "你的性別:".$gender."<br/>";
echo "普通票票數:".$num1."<br/>";
echo "敬老票票數:".$num2."<br/>";
echo "愛心票票數:".$num3."<br/>";

foreach ($pla1 as $key => $value) {
echo "你的起點:".$value."<br/>";
}

foreach ($pla2 as $key => $value) {
echo "你的終點:".$value."<br/>";
}

echo "你的座位喜好:".$like."<br/>";
echo "你的連絡電話:".$pho."<br/>";
echo "你的信箱:".$email."<br/>";

$comments=$_POST["comments"];
echo nl2br(htmlspecialchars($comments));


?>