<?php
	if(isset($_GET['term'])) {
		$term = $_GET['term'];
	} else {
		exit("You must enter a search term");
	}

	if(isset($_GET['type'])) {
		$type = $_GET['type'];
	} else {
		$type = "sites";
	}

	//You can also use this
	// $type = isset($_GET['type']) ? $_GET['type'] : "sites";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to my searchEngine</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="headerContent">
				<div class="logoContainer">
					<a href="index.php" title="Doodle">
						<img src="assets/images/doodleLogo.png" alt="Logo image">
					</a>
				</div>
				<div class="searchContainer">
					<form action="search.php" method="get">
						<div class="searchBarContainer">
							<input class="searchBox" type="text" name="term">
							<button class="searchButton" type="">
								<img src="assets/images/icons/search.png">
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="tabsContainer">
				<ul class="tabList">
					<li class="<?php echo $type == 'sites' ? 'active' : '' ?>"><a href='<?php echo "search.php?term=$term&type=sites"; ?>'>Sites</a></li>
					<li class="<?php echo $type == 'images' ? 'active' : '' ?>"><a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>