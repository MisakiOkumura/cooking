<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>お問い合わせフォーム</title>
</head>

<body>
<form action="./questione" method="post">
{{ csrf_field()}}

	<p>氏名<font color="red">必須</font></p>
    <input type="text" name="name">
    
	<p>メールアドレス<font color="red">必須</font></p>
	<input type="text" name="email">
	
	<p>問い合わせ内容<font color="red">必須</font></p>
	<textarea name="comment" rows="10" cols="40">問い合わせ内容を入力してください。</textarea>

	<p><input type="submit" value="入力内容を確認"></p>
</form>
</body>
</html>