<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta meta name="description" content="Boogie Skate Mag">
		<title>Contact Submit</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<a href="index.html"><img src="images/Logo_White.png" alt="Boogie Logo" height="100px"/></a><br>
			The Bronx Skate Magazine
			<nav class="topnav">
				<!-- Centered link -->
				<div class="topnav-centered">
					<a href="index.html" class="active">Home</a>
				</div>

				<!-- Left-aligned links (default) -->
				<a href="videos.html">Videos</a>
				<a href="photos.html">Photos</a>

				<!-- Right-aligned links -->
				<div class="topnav-right">
					<a href="contact.html">Contact</a>
					<a href="about.html">About</a>
				</div>
				
			</nav>
		</header>
		<main>
			Welcome <?php echo $_POST["fname"]; ?><br>
			Your email address is: <?php echo $_POST["email"]; ?>
		</main>
		<footer id="footer">
			<hr>
			<p>Made in America.<br>Est. 2020<br>Until Infinity</p>
		</footer>
	</body>

</html>