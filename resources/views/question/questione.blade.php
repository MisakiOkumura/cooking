<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>お問い合わせフォーム</title>
</head>

<body>
<form action="./questionc" method="post">
{{ csrf_field()}}

	<p>ユーザー名:{{$name}}</p>

	<p>メールアドレス:{{$email}}</p>
	
	<p>問い合わせ内容:{{$comment}}</p>
		

<input type="button" value="内容を修正する" onclick="history.back(-1)">

<input type="submit" value="送信">
</form>
</body>
</html>