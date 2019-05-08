<?php
    require_once 'config.php';
    
    error_reporting(E_ALL) ; ini_set('display_erros',1);
    $attkSpeed;
    $dmgType;
    $name;
    $varSpeed;

 
    if(isset($_GET['keywords'])){
         $keywords = $link->escape_String($_GET['keywords']);
    
         $query = $link->query("
            SELECT name
            FROM monsters
            WHERE name LIKE '%{$keywords}%' 
          ");
         $speed = $link->query("
            SELECT speed, name, var_speed, type
            FROM monsters
            WHERE name LIKE '%{$keywords}%'
          ");
         if(! $speed){
             die("couldn't get data: " . mysql_error());
         }
         $row = mysqli_fetch_array($speed, MYSQLI_NUM);
        
        $attkSpeed = $row[0];
        $name = $row[1];
        $varSpeed = $row[2];
        $dmgType = $row[3];
    }
    /*
    else{
        die("No keyword submitted")
    }
    */


   
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search</title>
        <script src = "PrayFlick.js"></script>
        <link rel="stylesheet" href="PrayFlick.css">    
    </head>
</head>
<body>    
    <div id = "topBorder"></div>
 	<header class="inner clearfix">
        <hgroup>
            <img id = "logo" src = "images/OSRS.png">
           <h1 id="site-title"><a href="RunePal.php" title="Homepage">RunePal</a>
            </h1>
            <h2 id="university-title"><a href="RunePal.php" title="Homepage">An OSRS Companion Website</a>
            </h2>
	    <p id = "loginAndRegister">
                <a id = "login" href = "login.php">Login</a> | <a id = "register" href = "register.php">Register</a>
            </p>
        </hgroup>
     </header>

    <div>
    <nav>
        <ul id = "navBar">
        <li class = "liNav" id = "firstli"><a href = "FarmGuide.php">Farming</a></li>
         <li class = "liNav"><a href = "STASHUnit.php">STASHUnits</a></li>
         <li class = "liNav"><a href = "PrayFlick.php">Flicking</a></li>
         <li class = "liNav"><a href="About.php">About</a></li>
        <li class = "liNav"><a href="Contact.php">Contact</a></li>
        </ul>
    </nav>
    </div>
    <div id = "subNavBar"> 
        
        <a href="http://student2.cs.appstate.edu/perdueca/RunePal/RunePal.php">Home</a> 
        &#62;
        <a href="#">Prayer Flicking</a>

    </div>
    
    
    <h2 id = "IRD">Welcome To Our Prayer Flicking Guide</h2>


	    <div class = "result-count">
            Found <?php echo $query->num_rows; ?> results  
            <?php if($query->num_rows > 0){
                    echo "for <span id = 'name'>". $name . "</span>  with attack speed equal to <span id = 'attkSpeed'>" . $attkSpeed . "</span>"; 
                    echo "<br>";
                    echo "This creature attacks with <span id = 'attackType'>" . $dmgType . "</span>";
                    echo "<br>";
                    echo "Click the image just before you attack your enemy to begin the sequence";
            }?>   
            <?php //echo $attkSpeed; ?>
            <br>
           <!--
                <span id = 'name'><?php echo $name; ?></span>
                <span id = 'attkSpeed'><?php echo $attkSpeed; ?></span>
                <span id = "attackType"> <?php echo $dmgType; ?> </span>
        -->          
    	</div>
            
        <div id = "icon"></div>
        <div id = "iconOn"></div>
<script src = "PrayFlick.js"></script>
</body>
</html>

