<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
</head>
<body>

	<h3><a href="../posts">Index</a></h3>
	<h2>{{ $post->title }}</h2>

	{{ $post->text }}
	<hr>
	<div>
		<a href="./{{$post->id}}/edit">Edit</a>
	</div>

</body>
</html>