<!DOCTYPE html>

<!-- 
Reday Ahmad Yahya | Project Website Build 
Student ID: M00531154
Game built with Phaser
for questions: ry106@live.mdx.ac.uk
Build Version: RC_0.1
INDEX DOCUMENT
-->

<html>
<!-- Document Start -->
    
<!-- Start of Head -->  
<head title ="PROJECT WEBSITE"></head>
    
<!-- CSS Stylesheet ref -->
<link rel="stylesheet" type="text/css" href="css/frame.css">
    
<!-- Login System js -->
<script type="text/javascript" language="javascript" src="login.js"></script>

	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
	
	<!-- Script Slots -->
    <script>  </script>
    <script> </script>
    <script> </script>
    
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
    <li class="active"><a href="index.php">  Home  </a></li>
    <li><a href="game.php">  RUNNING CHANI  </a></li>
    <li><a href="about.php"> About </a></li>
  </ul>
</div>
    
<!--End of Navigation Menu -->
    
    
    
<hr>
    <h1>Welcome to Running Chani</h1>
    <hr>
    </br>
    <p class="per">Before we begin with the game, we need you to sign up.</p>
    <p class="per">Running Chani is a Jump and Run Platformer, that is written in P5.JS. You can find more about the game in the about tab. </p>
    <p class="per">For compatibility issues. I highly suggest you use the latest version of Chrome.</p>

    </br>
<hr>
    <div class="magentaaa">
        
	<div class="container-fluid">
        
  <div class="row">
      
    <div class="col-sm-4">
        
		<div class="col-sm-4">
    <div class="login"> 
        <p class="per">Login: <p class="per">
        <p class="per"></p>Username: </input>
        <input type="text" id="Login_Username" placeholder="Username"/>
        <p class="per"></p>Password: </input>
        <input type="password" id="Login_Password" placeholder="*******"/>
        </br>
        </br>
        <input type="button" id="Login_Btn" value="Login" onClick="check()" />
    </div>
	</div>
	</div>

    <div class="col-sm-4"><hr width="1" size="250" color="red"></div>

<div class="col-sm-4">
        <div class="col-sm-4">
        
		<div class="col-sm-4">
    <div class="login"> 
        <p class="per">Register: <p class="per">
        <p class="per"></p>Username: </input>
        <input type="text" id="Register_Username" placeholder="Username"/>
        <p class="per"></p>Password: </input>
        <input type="text" id="Register_Password" placeholder="*******"/>
        <p class="per"></p>Address: </input>
        <input type="text" id="Register_Address" placeholder="Address 000"/>
        <p class="per"></p>PhoneNumber: </input>
        <input type="text" id="Register_pn" placeholder="0000-00000"/>
        </br>
        </br>
        <input type="button" id="Register_Btn" value="Register" onClick="store()" />
    </div>
	</div>
	</div>
    
</div>
  
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