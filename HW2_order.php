<!DOCTYPE html>
<html>
<head>
	<title>A1073307 訂票頁面</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<h1><center>歡迎!!!</center></h1>
	<h2><center>歡迎!!!</center></h2>
	<h3><center>歡迎!!!</center></h3>
	<h4><center>歡迎!!!</center></h4>
	<h5><center>歡迎!!!</center></h5>
	<h6><center>歡迎!!!</center></h6>
	<a href="HW2_price.html">
		<center><img src="https://upload.cc/i1/2020/03/11/uCbne0.png"></center>
	</a>

	<form action="HW2_enter.php" method="post">

		<b>姓名:</b><input type="text" placeholder="English Only" name="username"  required="required"><br/><br/>
		<b>學號:</b><input type="password" name="student_id" required="required"><br/><br/>
		<b>性別:</b>
			<i>男<input type="radio" name="gender" value="boy" required="required"></i>
			<i>女<input type="radio" name="gender" value="girl"></i><br/><br/>
		<b>票數:</b></br>
			<i>普通票:</i><input type="number" name="number1" required="required"><br/>
			<i>敬老票:</i><input type="number" name="number2" required="required"><br/>
			<i>愛心票:</i><input type="number" name="number3" required="required"><br/></br>
		<b>起訖站:</b><br/>
			<i>起點:</i>
				<select name="place1[]" required="required">
					<option value="請選擇">請選擇</option>
					<option value="管理學院">管理學院</option>
					<option value="法學院">法學院</option>
					<option value="圖資">圖資</option>
					<option value="理學院">理學院</option>
					<option value="學二宿舍">學二宿舍</option>
					<option value="工學院">工學院</option>
					<option value="行政大樓">行政大樓</option>
				</select><br/>
			<i>終點:</i>
				<select name="place2[]" required="required">
					<option value="請選擇">請選擇</option>
					<option value="管理學院">管理學院</option>
					<option value="法學院">法學院</option>
					<option value="圖資">圖資</option>
					<option value="理學院">理學院</option>
					<option value="學二宿舍">學二宿舍</option>
					<option value="工學院">工學院</option>
					<option value="行政大樓">行政大樓</option>
				</select><br/><br/>
		<b>座位喜好:</b>
			<i>靠窗戶<input type="radio" name="like" value="靠窗戶" required="required"></i>
			<i>靠走道<input type="radio" name="like" value="靠走道"></i>
			<i>都可以<input type="radio" name="like" value="都可以"></i><br/><br/>
		<b>連絡電話:</b><input type="text" name="phonenum" required="required"><br/><br/>
		<b>信箱:</b><input type="email" name="email" required="required"><br/><br/>
		<b>備註:</b>
		<textarea rows="5" cols="126" name="comments">
			備註~
		</textarea><br/><br/>
		<input type="submit" value="我要訂票">
		<input type="reset" value="全部重填"><br/><br/>
	
	</form>

</body>
</html>