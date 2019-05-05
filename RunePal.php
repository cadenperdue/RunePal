<?php
    require_once 'config.php';
   session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='RunePal.css'>
</head>
<body>



<!-- Links/Title goes here -->
    <div id = "topBorder"></div>
 	<header class="inner clearfix">
        <hgroup>
            <img id = "logo" src = "images/OSRS.png">
            <h1 id="site-title"><a href="RunePal.php" title="Homepage">RunePal</a>
            </h1>
            <h2 id="university-title"><a href="RunePal.php" title="Homepage">An OSRS Companion Website</a>
            </h2>
            <p id = "loginAndRegister">
            <?php if(isset($_SESSION['id'])): ?>
                <a class="link" href="logout.php" style="text-decoration:none">Logout</a>
            <?php else: ?>
                <a class="link" href="login.php" style="text-decoration:none">Login</a> | <a href = "register.php"> Register </a>
            <?php endif; ?>   
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
    </div>
    
    <!-- Other pages have a back button here -->
    
    <!-- Search By -->
    <h2 id = "IRD">Our Tools</h2>

    <div class = "flexBoxes">
        <div id = "farmFlex">
            <a href = "FarmGuide.php"><span class = "flexHead"> Farming Run Route Guide </span>
		        <img src = "images/farmRunCap.PNG" alt = "Farm Run Guide" id = "farm">
	        </a>
        </div>
        <div id = "stashFlex">
            <a href = "STASHUnit.php"><span class = "flexHead"> Your Currently Filled STASH Units </span>
	    	     <img src = "images/STASHCap.png" alt = "STASH Units" id = "stash">

	        </a>
                
        </div>
        <div id = "prayFlex">
            <a href = "PrayFlick.php"><span class = "flexHead"> Prayer Flick Timing Assitant </span>
        		 <img src = "images/PrayFlick.png" alt = "Prayer Flick Assist" id = "pray">
	        </a> 
        </div>
    </div> 



</body>
</html>
