<?php
	$bg = array('images/bg4.jpg', 'images/bg7.jpg', 'images/bg3.jpg');
	
	if($page_title == "Home"){
		$bgImage = $bg[0];
	}else if($page_title == "Portfolio"){
		$bgImage = $bg[1];
	}else {
		$bgImage = $bg[2];
	};
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css"> 
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script type="text/javascript">
	$(window).scroll(function() {
    if ($(document).height() <= ($(window).height() + $(window).scrollTop())) {
        $('footer').css("opacity",1);
    } else {
    	$('footer').css("opacity",0);
    }
});
</script>

<style>
	header {
		background: url(<?php echo $bgImage; ?>) center center;
	}
</style>

<body>
	<nav>
		<div class="container">
			<h1 class="logo"><a href="index.html">UIBrush</a></h1>
			<ul>
				<li><a href="index.php" <?php if($page_title == "Home"){echo "class='active customLine'";} ?> >HOME</a></li>
				<li><a href="services.php" <?php if($page_title == "Services"){echo "class='active'";} ?>>SERVICES</a></li>
				<li><a href="portfolio.php" <?php if($page_title == "Portfolio"){echo "class='active'";} ?>>PORTFOLIO</a></li>
			</ul>
		</div>
	</nav>

	<div class="navigation">
        <ul class="nav">
            <h1 class="logo"><a href="index.html">UIBrush</a></h1>
            <li class="btn"><a href="#" class="btn-link">&#9776;</a>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="services.php">Services</a></li>
                </ul>
            </li>
        </ul>
    </div>


	<header>
		<div class="container">
			<ul>
				<?php if($page_title == "Home"){ 
					echo "<h2 class='home'>Welcome to UIBrush</h2><br>";
					echo "<h3 class='home'>We Provide Ultimate Free PSD Templates</h3>";	
				} else if($page_title == "Portfolio"){

					echo "<h2 class='header'>Our <span>Works</span></h2><br>";
					echo "<p class='white'>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>";	
					} else {

					echo "<h2 class='header'>What <span>We Do</span></h2><br>";
					echo "<p class='white'>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>";	

				}; ?> <br>
			</ul>
		</div>
	</header>