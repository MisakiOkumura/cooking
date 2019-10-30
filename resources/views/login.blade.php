
<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>ログイン</title>
</head>
<body>

<p>ログイン画面</p>
<form action="./loginc" method="post"> 

{{ csrf_field()}}
		<p>メールアドレス<font color="red">必須</font></p>
		<input type="text" name="email">

		<p>パスワード<font color="red">必須</font></p>
		<input type="password" name="password">

		<p><input type="submit" value="ログイン"></p>
</form>
	
</body>
</html>