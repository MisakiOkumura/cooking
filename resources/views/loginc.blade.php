<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<titleトップ</title>
</head>
<body>
<p>ようこそ {{$name}} さん</p>

<style type="text/css">
a.border{
    text-decoration: none;
}
</style>

<body>
	
	{{ csrf_field()}}
	
	<p><a href="http://ec2-18-223-152-59.us-east-2.compute.amazonaws.com/cooking/public/recipe" class="border">レシピ投稿</a></p>
    <a href="http://ec2-18-223-152-59.us-east-2.compute.amazonaws.com/cooking/public/question" class="border">お問い合わせ</a>
</form>
</body>
</html>

