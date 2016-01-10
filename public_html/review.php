<!DOCTYPE html>
<!--Author: Madison Chase
   All images and information was provided by:
   Griffin, G. (2015, September) Greg Griffin Surfboards. -->

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>Review</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
           
    <div id ="header">
        <nav>
        <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a>       
        </li>
        <li><a href="#">Photos <span class="arrow">&#9660;</span></a>
        <ul class="sub-menu">
        <li><a href="surfboards.html">Surfboards</a></li>
        <li><a href="fins.html">Fins</a></li>
        <li><a href="misc.html">Misc.</a></li>       
        </ul>
        </li>
        <li><a href="surfboard.html">Surfboards</a>
        </li>
        <li><a href="contact.php">Contact</a></li>
               <li><a href="review.php">Reviews</a></li>
        <li><a href="newsfeed.php">Newsfeed</a></li> 
        <li><a href="https://www.facebook.com/Greg-Griffin-Surfboards-220456954680897/timeline/" target="_blank">
        Facebook</a>
        </ul>

    </nav>
    </div>
        <div id="content">

        <div class="Textwrap">
	<form method='post'>
        <h3> Name </h3>
        <input name="name" type="text" value="" size="30"/>
        <h3> Location </h3>
        <input name="location" type="text" value="" size="30"/>
        <h3> Review </h3>
        <textarea name="textblock" rows="7" cols="40"></textarea>
        <p>
	<input type='submit' value='Comment'>
        </p>
	</form>

        </div>
            
	<?php
        if ($_POST) {
        $myfile = 'textfile.txt';
               $f = fopen ($myfile, 'a');
        $fill = "\n";
        $space = "---------------------------";
        fwrite ($f, $fill);
        fwrite ($f, $_POST['name']);
        fwrite($f, $fill);
        fwrite($f, $_POST['location']);
        fwrite($f, $fill);
        fwrite ($f, $_POST['textblock']);
        fwrite($f, $fill);
        fwrite ($f, $space);
        fclose($f);
        }
      ?>
        <h2> Reviews </h2> 
        <hr>
        <div id="container">   
  
         <br/>
    
         <?php

        $f = fopen("textfile.txt", 'r');
        while (!feof($f)) {
            echo fgets($f) . "<br>";
        }
        fclose ($f);

	?>
            </div>
                </div>
   ​<div id="footer">

    <h1> GREG GRIFFIN SURFBOARDS </h1>
    <a href="mailto:myrcria@gmail.com" target="_top"><p>Madison Chase</p></a>

    </div>
    </div>

</body>       
</html>