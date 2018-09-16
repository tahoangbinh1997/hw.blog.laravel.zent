{{dd($tag->posts())}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>{{$tag->name}}</h1>
	@foreach($tag->posts as $post)
		<h2>{{$post->name}}</h2>
		<p>{{$post->description}}</p>
	@endforeach
</body>
</html>