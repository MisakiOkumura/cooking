<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>レシピ投稿</title>
</head>
<body>

<form action="./recipee" method="post"> <!---送信方法を確認>
<!--必ず入力-->
{{ csrf_field()}}
	
	<br>
	<div class="border col-7"></div>
	    <br>
		<p>レシピのタイトル</p>
		<br>
		 <div class="row">
            <div class="col-md">
            	<form>
            		 <div class="form-group">
                        <label>レシピタイトル：</label>
                        <input type="text" name="title" placeholder="から揚げ">
                    </div>
            	</form>

<input type="submit" value="登録する">
</form>
</body>
</html>