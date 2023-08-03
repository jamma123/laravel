<!DOCTYPE html>
<html>
<head>
	<title>Create new post</title>
</head>
<body>

	<h1>New Post</h1>
	<h2><a href="../posts">Add Post</a></h2>

	@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

<form method="post" action="../posts">
	@csrf
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td>
				<textarea name="text"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name=""></td>
		</tr>
	</table>
</form>
</body>
</html>