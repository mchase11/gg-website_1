<!DOCTYPE html>
<!--Author: Madison Chase
   All images and information was provided by:
   Griffin, G. (2015, September) Greg Griffin Surfboards. -->

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>Contact</title>
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
        <div class ="Textwrapcontact">
        <img src="img/griffinlogo.gif" alt="greg">
        <p> Greg Griffin | Owner | Shaper </p>
        <p> Sunset Point | Greg Griffin Surfboards </p>
        <p> Honolulu, HI </p>
        <p> E-Mail: GriffinSurfboard@aol.com </p>
        </div>

<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
<div class = "Textwrapleft">
    <form  action="contact.php" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    <h3>Name:</h3>
    <input name="name" type="text" value="" size="30"/><br> 
    <h3>Email:</h3> 
    <input name="email" type="text" value="" size="30"/><br> 
    <h3>Your message:</h3>
       <textarea name="message" rows="7" cols="40"></textarea>
    <div class="center">
    <p>
    <input type="submit" value="Send email"/> 
    </p>
    </div>
    </form> 
</div>
    <?php 
    }  
else     
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("myrcria@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 
        </div>
   ​<div id="footer">
    <h1> GREG GRIFFIN SURFBOARDS </h1>
    <a href="contact.php"></a>
     <a href="mailto:myrcria@gmail.com" target="_top"><p>Madison Chase</p></a>
    </p>
    </div>
    </div>
</body>       
</html>