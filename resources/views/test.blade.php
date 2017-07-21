<html>
	<head>
		<title>Laravel Proj</title>
		<meta charset="utf-8">	
	</head>
	<body>
		<div>
			<h3> Post-tags </h3>
				{{ print_r($post->toArray()) }}
		</div>
		<div>
			<h3> Video-tags </h3>
				{{ print_r($video->toArray()) }}
		</div>

	</body>
</html>
