<!DOCTYPE html>
<html>
<head>
	<title>Posts Index</title>
</head>
<body>

	<h1>All Posts</h1>
	<h2><a href="posts/create">Add Post</a></h2>

	<div>
		<table border="1px" cellspacing="0px">
			<tr>
				<th width="200px">Title</th>
				<th>Action</th>
			</tr>
			@foreach($posts as $post)
			<tr>
				<td>
					{{ $post->title }}
				</td>
				<td>
					<a href="./posts/{{ $post->id }}">View</a>
					<form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
		            @method('DELETE')
		            @csrf
		            <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this post?')) { this.closest('form').submit(); }">Delete</a>
		        </form>
				</td>
				
			</tr>
			@endforeach
		</table>
	</div>

</body>
</html>