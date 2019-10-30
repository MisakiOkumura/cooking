
{{$title}}

<!doctype html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>レシピ投稿</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
	
    <!-- Bootstrap CSS -->

<body>
	
	<form action ="./recipec" enctype ="multipart/form-data" method="post"><input name="file_upload" type="file">
    {{ csrf_field()}}
   
    <div class="border col-10">
        <br>
        <h2>レシピ投稿</h2>
        <br>
        <div class="row">
            
            <div class="col-md">
                    <div class="form-group">
                       <div><label>材料：</label></div> 
                        <textarea class="form-control" name="zairyou" rows="30" cols="50">例: 玉ねぎ　1個</textarea>
                    </div>
                    
                    <div class="form-group">
                       <div><label>作り方：</label></div> 
                        <textarea class="form-control" name="cook" rows="50" cols="50">例: 1. フライパンに油をしき、ベーコンを炒める。</textarea>
                    </div>
                    
                    <div class="form-group">
                       <div><label>補足：</label></div> 
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
            </div>
        </div>
        <div class="row center-block text-center">
            <div class="col-1">
            </div>
            <div class="col-5">
                <input type="submit" value="登録">
            </div>
        </div>
        <br>
    </div>
    </form>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
 
</html>
</form>
</body>
</html>
