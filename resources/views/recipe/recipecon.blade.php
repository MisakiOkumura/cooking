<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>レシピ投稿</title>
</head>
<body>

<form action="./recipee" method="post"> <!---送信方法を確認>
<!--必ず入力-->
{{ csrf_field()}}
		<p>レシピの投稿が完了しました。</p>

<input type="button" value="トップ画面に戻る">
</form>
</body>
</html>
