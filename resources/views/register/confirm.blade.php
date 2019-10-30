
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>世界料理発見！新規会員登録</title>
</head>

<body>
<form action="./complete" method="post">
{{ csrf_field()}}

	<p>ユーザー名:{{$name}}</p>
	<input type="hidden" name="name" value="{{$name}}">
	
	<p>メールアドレス:{{$email}}</p>
	<input type="hidden" name="email" value="{{$email}}">
	
	<p>パスワード</p>
	<p>【表示されません】</p>
	<input type="hidden" name="password" value="{{$password}}">
	
<a href="./register">修正する</a>
<input type="submit" value="登録する">
</form>
</body>
</html>