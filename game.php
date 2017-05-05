<!DOCTYPE html>

<!-- 
Reday Ahmad Yahya | Project Website Build 
Student ID: M00531154
Game built with Phaser
for questions: ry106@live.mdx.ac.uk
Build Version: RC_0.1
GAME DOCUMENT
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

    <meta charset = "UTF-8">
    
    <!-- Game Script Files -->
    
    <script src = "js/phaser.js"></script>
    <script src = "gamefiles/boot.js"></script>
    <script src = "gamefiles/Preloader.js"></script>
    <script src = "gamefiles/Preloader2.js"></script>
    <script src = "gamefiles/Preloader3.js"></script>
    <script src = "gamefiles/Preloader4.js"></script>
    <script src = "gamefiles/level1.js"></script>
    <script src = "gamefiles/level2.js"></script>
    <script src = "gamefiles/level3.js"></script>
    <script src = "gamefiles/END.js"></script>
    <script src = "hs.js"></script>
    
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
    <li class="active"><a href="game.php">  RUNNING CHANI  </a></li>
    <li><a href="about.php"> About </a></li>
  </ul>
</div>
    
<!--End of Navigation Menu -->
    
<hr>
    <h1> | Running Chani | </h1>
    </br>
    <p class = "per">Controls: Use the <img src="images/keys.png" width = "50" height = "50"></img> to move Chani. Relead the page to restart. </p> 
    <p id = "highscore"></p>
    </br>
    <div id="gamearea">
        
    <script type="text/javascript">
    
        
        //glob var
        var glob_score = CoinCount * 10;
        
        
store_hs = function() {
    
    //loads username
    var user_loaded = localStorage.getItem('Username');
    
    //Create JSON Object
    var User_Score = {"username" : user_loaded , "Score" : glob_score};
    
    //stores data
    localStorage.setItem('UserScore', JSON.stringify(User_Score));
    localStorage.setItem('Score', glob_score);
    
    //fetching data
    var user_get_score = localStorage.getItem('Score')
    
    //dynamically updating highscore
    document.getElementById('user_names').innerHTML = user_loaded;
    document.getElementById('user_scores').innerHTML = user_get_score; 
    
    },
        //Function that sets the score in html to a variable. Gets called in Level1.js update function
        display_highscore = function() {
            var disp_score = "Your Highscore is: " + CoinCount * 10;
            //dynamically chaning website
            document.getElementById('highscore').innerHTML = disp_score;
        },
            
        
        
        window.onload = function() {
            
            

            //Creates gamearea
            var game = new Phaser.Game(1000,320,Phaser.CANVAS,'gamearea');
            
            //adding gamestates stored in diffrent js files
            game.state.add("boot", Game.boot);
            game.state.add("Preloader", Game.Preloader);
            game.state.add("Preloader2", Game.Preloader2);
            game.state.add("Preloader3", Game.Preloader3);
            game.state.add("Preloader4", Game.Preloader4);
            game.state.add("level1", Game.level1);
            game.state.add("level2", Game.level2);
            game.state.add("level3", Game.level3);
            game.state.add("END", Game.END);
            
            //initizing boot state
            game.state.start("boot");
            
        }
    
        </script>
        
        
        <input type="button" id="Highscore" value="Save-Highscore" onClick= "store_hs()" />
        
        
        
        
    </div>

    <p id=secret></p>

    <script type="text/javascript">
            //Fetches item to store in a variable (easer to write)
            var session_name = sessionStorage.getItem('Username');
            
            //condition that checks wether user has a session registered 
            if (session_name != null){
                
            //Prepatching content to be dynamically displayed
            var username = sessionStorage.getItem('Username');
            var Secret = "Welcome: " + username + " MEMBER SECRET: Since you're logged in, you can press P to skip the very First level.";
                
            //displays content when session is avaliable
            document.getElementById('secret').innerHTML = Secret;
            }
        
        else{
            //Alternative Statement
            var Secret = "Please login to see the MEMBER SECRET";
            document.getElementById('secret').innerHTML = Secret;
        }
    </script>

    <hr>

<!--Start of Highscores -->
<table width="50%" class="Highscores">
  <tbody>
    <tr>
      <td><p id="user_names">:</p></td>
      <td><p id="user_scores"></p></td>
    </tr>
    <tr>
      <td>00Meow:<td>
      <td>30</td>
    </tr>
    <tr>
      <td>Charles:</td>
      <td>20</td>
    </tr>
    <tr>
      <td>May:</td>
      <td>10</td>
    </tr>
    <tr>
      <td>Jeffrey:</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
<!-- End of Highscore -->

 
</div> 
    
    <hr>
	

	
	

<div class="pageFooter">
<!-- End of Div Layout -->
    
</div>
</body>
<!-- End of Body -->
<!-- Document End -->
</html>