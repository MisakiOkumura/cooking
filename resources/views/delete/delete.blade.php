
<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>世界料理発見！退会申請</title>
</head>
<body>
	
<p>必要事項を入力してください</p>
<form action="./deletec" method="post"> <!---送信方法を確認>
<!--必ず入力-->
{{ csrf_field()}}
		<p>ユーザー名<font color="red">必須</font></p>
		<input type="text" name="name">

		<p>メールアドレス<font color="red">必須</font></p>
		<input type="text" name="email">

		<p>パスワード<font color="red">必須</font></p>
		<input type="password" name="password">

		<p><input type="submit" value="退会申請をする"></p>
</form>
	
</body>
</html>
