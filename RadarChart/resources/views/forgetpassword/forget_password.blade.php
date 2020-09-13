<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forget</title>
</head>
<body>
	<form action="{{url('/forget_password')}}" method="post">
		{{csrf_field()}}

		 @if(session('error'))
		 <div>{{session('error') }}</div>
		 @endif

		 @if(session('success'))
		 <div>{{session('success') }}</div>
		 @endif

		<input type="email" name="email" id="email">
		<button type="submit">Submit</button>
	</form>
</body>
</html>