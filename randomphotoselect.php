<?php
	 srand( microtime() * 1000000 );
	 $num = rand(1,4);
	 $num1 = rand(1,3);
	 $num2 = rand(1,4);


	 switch($num) {
		case 1: $image_file = "IMG_0919.jpg";
		   break;

		case 2: $image_file = "IMG_0964.jpg";
		   break;

		case 3: $image_file = "IMG_0957.jpg";
		   break;

		case 4: $image_file = "IMG_0923.jpg";
		   break;
	 }

	 switch($num1) {
		case 1: $image_file1 = "IMG_0986.jpg";
		   break;

		case 2: $image_file1 = "IMG_0966.jpg";
		   break;

		case 3: $image_file1 = "IMG_0962.jpg";
		   break;
	 }

	 switch($num2) {
		case 1: $image_file2 = "IMG_0961.jpg";
		   break;

		case 2: $image_file2 = "IMG_0955.jpg";
		   break;

		case 3: $image_file2 = "IMG_0957.jpg";
		   break;

		case 4: $image_file2 = "IMG_0920.jpg";
		   break;
	 }
?>
	    
	   
<div class="homepic"><?php echo "<img src=$image_file/>" ?></div>
<div class="homepic"><?php echo "<img src=$image_file1/>" ?></div>
<div class="homepic"><?php echo "<img src=$image_file2/>" ?></div>