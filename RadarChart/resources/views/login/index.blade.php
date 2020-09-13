<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" /et>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="">
		<div class="navbar">
			<div class="row">
				<div class="col-3 col-sm-4">
					<div class="img-responsive" id="logo" alt="Responsive image">
					</div>
				</div>
				<div class="col-9 col-sm-8 " id="web-name">
					投資不動産診断
				</div>
			</div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="img-responsive" id="frame" alt="Responsive image" >
						<img src="css/Frame.png" alt="frame">
					</div>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 center-block" id="login-form">
					<form>
						<div>
           		 			<p>ログイン</p>
           				</div>
						<div class="form-group">
						    <label for="Email">メールアドレス</label>
						    <input type="email" class="form-control" id="Email">
						</div>
						<div class="form-group">
						    <label for="Password">パスワード</label>
						    <input type="password" class="form-control" id="Password">
						</div>
						<div class="form-group">
						<a href="{{url('/forget_password')}}">パスワードを忘れた方</a>   
						</div>
						<button type="submit" class="btn btn-primary">ログイン</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>