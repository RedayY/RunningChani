<!DOCTYPE html>

<!-- 
Reday Ahmad Yahya | Project Website Build 
Student ID: M00531154
Game built with Phaser
for questions: ry106@live.mdx.ac.uk
Build Version: RC_0.1
ABOUT DOCUMENT
-->

<html>
<!-- Document Start -->
    
    <!-- Start of Head -->  
    <head title ="PROJECT WEBSITE"></head>
    
    <!-- CSS Stylesheet ref -->
    <link rel="stylesheet" type="text/css" href="/css/frame.css">
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- End of Head -->
    
<!-- Start of Body -->
<body>
<div class="blended_grid">
    
<!-- Div Header -->
<nav class="pageHeader">
<!-- Banner -->
    <img src="images/BannerChani.jpg">  
<!-- End of Navigation --> 
</nav>
    </br>
     
<!--Navigation -->  

<div class="pageContent">
    
   <!--Start of Navigation Menu -->
    
    <div class="container">

  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.php">  Home  </a></li>
    <li><a href="game.php">  RUNNING CHANI  </a></li>
    <li class="active"><a href="about.php"> About </a></li>
  </ul>
</div>
    
<!--End of Navigation Menu -->

<!--Start of about us content -->

<hr>
    <h1> About Us </h1>
    <hr>
<p class ="per" style="text-align: Center;"> On this Page we will show you how the game works.</p>
    </br>

    
<div>
    <p class="per">Running Chani is a Platformer. This means that the games main conecpt is to get from Point A -> B gathering objectives.</p>
    </br>
    
     <div class="row">
      
    <div class="col-sm-4">
        <p style="float: left;"><img src="images/objective%20vs%20goal.PNG" height="100px" width="200px"</p>
        <p class="per">Your goals: Collect Cookies reach the grean area!</p>
	</div>

    <div class="col-sm-4"><hr width="1" size="250" color="red"></div>

<div class="col-sm-4">
        <p class="per">Your controls are: <img src="images/keys.png" width = "150" height = "150"></img></p>
        
	</div>
    
</div>

<div>
    <img src="images/level1.PNG" height="200px" width="1000px"</img>
    <p class="per">The first Stage is a very easy Stage where the game is introducing you to basic game concepts such as obsticles and objectives. Chani is escaping from her castle during night. Avoid lava at all times! </p>
</div>
</br>
<div>
    <img src="images/level2.PNG" height="200px" width="1000px"</img>
    <p class="per">The second Stage raises the dificulty. The stage is set the ancient Egypt where Chani has her final adventures in the pyramid. </p>
</div>
</br>
<div>
    <img src="images/level3.PNG" height="200px" width="1000px"</img>
    <p class="per">The third and last stage raises the dificulty to a whole new level. It challenges the player to react quick. Chani now tries to get the last few cookies.</p>
</div>
</br>
<div>
    <img src="images/endlevel.PNG" height="200px" width="1000px"</img>
    <p class="per">After the third Stage you will come to the credits screen. This screen is a way of telling the player that the game is over, but in a playful matter. There is room for more levels. Comming in the future</p>
</div>
</br>
<hr>
 <!--End of About us content -->
</div> 
    
    <hr>

<div class="pageFooter">
    
       <?php
//variables
$startingyear = 2006;
$currentyear = date('y');
//output year
echo $startingyear . '-' . $currentyear . "(C)";

//spacing
echo "<br>";
echo "<br>";

//dynamically updating date
echo "Today is " . date("d/m/Y") . "<br>";

//spacing
echo "<br>";
echo "<br>";

//C Statement
echo "Some art might have been used by Artist at " ?> 
    
    <a href='http://opengameart.org/'> Open Game Art </a>
    
    <?php Echo " Click the link and Please support open source Artists!" ?>
    
</div>
<!-- End of Div Layout -->
    
</div>
</body>
<!-- End of Body -->
<!-- Document End -->
</html>