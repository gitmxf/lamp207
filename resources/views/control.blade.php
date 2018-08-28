<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>流程</title>
</head>
<body>
	<h1>流程控制</h1>
	@if($isVip)
	VIP 
	@endif
	<h2>循环控制</h2>
	<ul>
	@foreach($classman as $v)

	<li>{{$v}} <input type="radio" name="al"></li>
	@endforeach
	</ul>
</body>
</html>