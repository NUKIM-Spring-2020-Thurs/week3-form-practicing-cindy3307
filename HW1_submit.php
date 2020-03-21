<?php

$name=$_POST["username"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$sid=$_POST["sid"];
$date=$_POST["date"];
$month=$_POST["month"];
$time=$_POST["time"];
$phonenum=$_POST["phonenum"];
$email=$_POST["email"];
$file=$_POST["file"];
$color=$_POST["color"];

$inter=$_POST["inter"];
$city=$_POST["city"];

echo "你的名字:".$name."<br/>";
echo "你的性別:".$gender."<br/>";
echo "你的年齡:".$age."<br/>";
echo "你的身高:".$height."<br/>";
echo "你的體重:".$weight."<br/>";
echo "你的身分證字號:".$sid."<br/>";
echo "你的生日:".$date."<br/>";
echo "報名年月份:".$month."<br/>";
echo "填寫時間:".$time."<br/>";
echo "你的電話:".$phonenum."<br/>";
echo "你的信箱:".$email."<br/>";
echo "你的檔案:".$file."<br/>";
echo "你喜歡的顏色:".$color."<br/>";


$interNo=count($inter);
echo "得知方法幾個:".$interNo."<br/>";
// for($j=0;$j<$interNo;$j++){
// 	echo "得知方法:".$inter[$j]."<br/>";
// }
echo "得知方法:".implode(",",$inter)."<br/>";


// foreach ($inter as $key => $value) {
// 	echo "得知方法:".$value."<br/>";
// }


if (isset($_POST["city"])) {
	
	$citynum=count($city);
	echo "居住地幾個:".$citynum."<br/>";
	for($i=0;$i<$citynum;$i++){
		echo "你的居住地:".$city[$i]."<br/>";

	}
}
else{
}

$comments=$_POST["comments"];
//echo nl2br($comments);
echo nl2br(htmlspecialchars($comments));


?>

