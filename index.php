<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to my searchEngine</title>
	<meta name="description" content="Search Engine for web sites and images">
	<meta name="keywords" content="search, engine, free, websites, doodle">
	<meta name="author" content="Primoz Babsek">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="wrapper indexPage">
		<div class="mainSection">
			<div class="logoContainer">
				<img src="assets/images/doodleLogo.png" alt="Logo image">
			</div>

			<div class="searchContainer">
				<form action="search.php" method="get">
					<input class="searchBox" type="text" name="term" placeholder="Enter a search term...">
					<input class="searchButton" type="submit" value="Search Now">
				</form>		
			</div> 
		</div>
	</div>
</body>
</html>