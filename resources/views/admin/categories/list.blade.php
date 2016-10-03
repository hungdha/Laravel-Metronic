<!DOCTYPE html>
<html>
<head>
	<title>Categories Page</title>
</head>
<body>
	<ul>
		@foreach( $categories as $category )		
			<li>{{$category->CategoryID}}</li>
			<li>{{$category->CategoryName}}</li>
			<li>{{$category->Description}}</li>
		@endforeach
	</ul>
</body>
</html>