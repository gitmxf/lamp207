<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
</head>
<body>

	@include('layouts/header');
	<h3>{{$username or '啥子'}}</h3>
	<h1>{{$content}}</h1>
	<p>{{date('Y-m-d H:i:s')}}</p>

	@include('layouts/footer');
	
</body>
</html>