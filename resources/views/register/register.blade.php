
<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>世界料理発見！新規会員登録</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	.top_pic{
		background-image: url('/cooking/public/storage/サイト画像.jpg');
		background-position: center center;
		background-repeat: no-repeat;
		 background-size: cover;
		 width: 100%;
		 height: 853px;
		 overflow: hidden;
		}
</style>
</head>
<body>
	<div class="top_pic">
	

<p>必要事項を入力してください</p>
<form action="./confirm" method="post"> <!---送信方法を確認>
<!--必ず入力-->
{{ csrf_field()}}
		<p><font color="white">ユーザー名<font color="red">必須</font></p>
		<input type="text" name="name">

		<p>メールアドレス<font color="red">必須</font></p>
		<input type="text" name="email">

		<p>パスワード<font color="red">必須</font></p>
		<input type="password" name="password">

		<p><input type="submit" value="入力内容を確認"></p>
</form>
</body>
</html>