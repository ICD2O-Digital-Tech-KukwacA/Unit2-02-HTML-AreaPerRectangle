<!DOCTYPE html>
<html lang="en">
	
	<head>
    <meta charset="utf-8">
    <meta name="description" content="My second webpage, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons_2/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons_2/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons_2/favicon-16x16.png">
    <link rel="manifest" href="./Favicons_2/site.webmanifest">
    <title>Area & Perimeter of Rectangle in PHP</title>
	</head>
	
	<body>
    <h1><?php echo 'Area & Perimeter of a Rectangle'; ?></h1>
		<?php 
			$length = 14;  
			$width = 12; 
			echo "<p>Length = $length cm<br>Width = $width cm</p>"; ?>		
		<?php 
		 echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup></p>";?>
	</body>

	</html>
	<body>
    <h1><?php echo 'Hello, World! in PHP'; ?></h1>
		<?php echo '<p>This is my first web page using PHP.</p>'; ?>
	</body>
</html>