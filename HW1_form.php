
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>8th高大資管營</title>
</head>
<body>

<form action="HW1_submit.php" method="post">

<h1>
	<center>
		<font size="8" color="#9957ew" face="標楷體">8th高大資管營報名表</font>
	</center>
</h1>

	<b>姓名:</b><input type="text" placeholder="English Only" name="username"><br/><br/>
	<b>性別:</b>
		<i>男<input type="radio" name="gender" value="boy"></i>
		<i>女<input type="radio" name="gender" value="girl"></i><br/><br/>
	<b>年齡:</b><input type="number" name="age"><br/><br/>
	<b>身高:</b><i><input type="text" name="height"></i><br/><br/>
	<b>體重:</b><i><input type="text" name="weight"></i><br/><br/>
	<b>身分證字號:</b><input type="password" name="sid"><br/><br/>
	<b>出生年月日:</b><input type="date" name="date"><br/><br/>
	<b>報名年月:</b><input type="month" name="month"><br/><br/>
	<b>填寫報名表時間:</b><input type="time" name="time"><br/><br/>
	<b>連絡電話:</b><input type="text" name="phonenum"><br/><br/>
	<b>連絡信箱:</b><input type="email" name="email"><br/><br/>
	<b>繳交大頭貼:</b><input type="image" name="image"><br/><br/>
	<b>繳交檔案:</b><input type="file" name="file"><br/><br/>
	<b>請選擇一個喜歡的顏色:</b><input type="color" name="color"><br/><br/>
	<b>如何得知資管營的消息:</b><br/>
		<i>粉絲專頁</i><input type="checkbox" name="inter[]" value="Internet" checked>
		<i>到校宣傳</i><input type="checkbox" name="inter[]" value="school">
		<i>親友告知</i><input type="checkbox" name="inter[]" value="friend">
		<i>海報傳單</i><input type="checkbox" name="inter[]" value="flyer">
		<i>其他</i><input type="checkbox" name="inter[]" value="other">
		<textarea rows="1" cols="70" name="other"></textarea><br/><br/>
	<b>居住地:</b>
		<select name="city[]" multiple>
			<option value="台北市">台北市</option>
			<option value="新北市">新北市</option>
			<option value="桃園市">桃園市</option>
			<option value="台中市">台中市</option>
			<option value="台南市">台南市</option>
			<option value="高雄市" selected>高雄市</option>
			<option value="基隆市">基隆市</option>
			<option value="新竹市">新竹市</option>
			<option value="新竹縣">新竹縣</option>
			<option value="嘉義市">嘉義市</option>
			<option value="嘉義縣">嘉義縣</option>
			<option value="苗栗縣">苗栗縣</option>
			<option value="彰化縣">彰化縣</option>
			<option value="南投縣">南投縣</option>
			<option value="雲林縣">雲林縣</option>
			<option value="屏東縣">屏東縣</option>
			<option value="宜蘭縣">宜蘭縣</option>
			<option value="花蓮縣">花蓮縣</option>
			<option value="台東縣">台東縣</option>
			<option value="澎湖縣">澎湖縣</option>
			<option value="金門縣">金門縣</option>
			<option value="連江縣">連江縣</option>
		</select><br/><br/>
	<textarea rows="5" cols="126" name="comments">
	我還有其他的話想說~
	</textarea><br/><br/>
<input type="reset" value="重新輸入">
<input type="submit" value="送出表單"><br/><br/>
	
</form>

<h3>
	<font color="red">注意事項!!!</font>
</h3>
<ol>
	<li>穿著舒適的服裝方便玩遊戲</li>
	<li>穿著運動鞋以免遊戲中受傷</li>
	<li>活動中有任何不適請立即告知小隊輔</li>
</ol>


<h3>
	<font color="red">攜帶物品</font>
</h3>
<ul>
	<li>報名表</li>
	<li>健保卡</li>
	<li>水壺</li>
	<li>帽子</li>
	<li>換洗衣物</li>
	<li>盥洗用具</li>
	<li>筆帶</li>
	<li>衛生紙</li>
</ul>


<a href="https://www.facebook.com/nukimcamp/">高大資管營粉專</a><br/><br/>
<a href="https://www.facebook.com/groups/166507323414152/">
	<img src="https://scontent.fkhh1-2.fna.fbcdn.net/v/t1.0-9/52596503_2037536316354073_2945292738267971584_n.jpg?_nc_cat=110&_nc_sid=7aed08&_nc_ohc=cIcii-HpRx4AX-WCEkt&_nc_ht=scontent.fkhh1-2.fna&oh=1393978a2707b25f35c341e74357a23c&oe=5E905043" width="250" height="250">
</a>

</body>
</html>