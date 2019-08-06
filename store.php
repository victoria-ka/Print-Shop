<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Store</title>
        <meta charset="utf-8">
        <meta name="description" content="Store">
        <meta name="author" content="Victoria Austin">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    
    <body>
         
        <?php include 'navmenu.php'; ?>

       
        <!--First Row of Items-->
        <div class="wrapper">
           
            <div class="item">
            	<img class="preview" src="IMG_0919.jpg" alt="pic">
            	<p class="name">The Museum and the Monument</p>
            	<p class="dimension">24 X 36</p>
            	<p class="price">$50</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
           
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0964.jpg" alt="pic">
            	<p class="name">Cornered Glass</p>
            	<p class="dimension">24 X 36</p>
            	<p class="price">$55</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0957.jpg" alt="pic">
            	<p class="name">Resilience</p>
            	<p class="dimension">24 X 36</p>
            	<p class="price">$60</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0920.jpg" alt="pic">
            	<p class="name">The Walls that Kept Us Out</p>
            	<p class="dimension">24 x 72</p>
            	<p class="price">$85</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0961.jpg" alt="pic">
            	<p class="name">Glass and Concrete</p>
            	<p class="dimension">24 x 72</p>
            	<p class="price">$85</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0962.jpg" alt="pic">
            	<p class="name">Grayscale</p>
            	<p class="dimension">24 x 72</p>
            	<p class="price">$85</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
           
            <div class="item">
            	<img class="preview" src="IMG_0955.jpg" alt="pic">
            	<p class="name">The Climb</p>
            	<p class="dimension">24 x 72</p>
            	<p class="price">$90</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0966.jpg" alt="pic">
            	<p class="name">We Rise</p>
            	<p class="dimension">24 x 72</p>
            	<p class="price">$85</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
            <div class="item">
            	<img class="preview" src="IMG_0986.jpg" alt="pic">
            	<p class="name">History Repeats</p>
            	<p class="dimension">24 x 72</p>
            	<p class="price">$100</p>
            	
            	<?php
					if ( isset($_SESSION['loggedin']) ) {
						echo "<button class='button'>Add to Cart</button>";
					}
				?>
            </div>
            
        </div>
        
    </body>


</html>