<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>{{$category->name}}</h1>
	@foreach($category->posts as $post)
		<h2>{{$post->title}}</h2>
		<img src="{{$post->thumbnail}}">
	@endforeach
</body>
</html>