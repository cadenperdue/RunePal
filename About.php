<?php
    require_once 'config.php';
   session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='About.css'>
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
        &#62;
        <a href="#">About</a>

    </div>
    
    <div id = "aboutSite">
        <h2 id = "header"> Welcome to my RuneScape Companion site, RunePal! </h2>
         
         <br><br>

        <h3> What is Old School Runescape? </h3>           
            <p class = "desc" > Old School RuneScape (OSRS) is an MMORPG developed and published by Jagex. The game was released in 2013 as a
                direct copy of the 2007 version of the game amidst controversy surrounding the version of the 
                game that was out in 2013. The rerelease, officially named Old School RuneScape, has 
                been in constant development alongside RuneScape and, as of 2019, has over 3 times the concurrent 
                players of RuneScape.
            </p>

        <br> <br>

        <h3> About the Site </h3>
            <p class = "desc"> Here at RunePal, you can find a few tools to aid you in your efficiency while playing RuneScape!.
            We currently have 3 tools available which will seek to streamline your gameplay experience. </p>
            
        <br><br>
        
        <h3> Our Tools </h3>
            <p class = "desc"> <b>Farming Route Guide</b> - Our Farming Route Guide will build the user a route to follow
            while making a farm run that while minimize time spent travelling. After the  user selects  their available
            teleports and farming patches a map will be generated which will guide the user along the fastest possible
            path to the nearest farming patch. The map will also display the next teleport the user should use based on what teleports
            the user is planning to employ. </p>
            
            <br>

            <p class = "desc"> <b>STASHUnit Listing </b> - If you're a clue hunter who utilized the various STASHUnits
            located all over the surface of Gielinor then you've probably found yourself ready to cpmplete the next step
            of you clue scroll only to realize you never built the STASHUnit at your current location. Running all the way
            back to the bank/GE to gather the equipment needed to fill the Unit can be incredibly time consuming if you
            didn't bring the necessary teleports to get yourself to a bank. Lucky for you, the user, we have a tool which will
            allow you to log the Units you previosuly filled so you can always operate at max efficiency! </p>

            <br> 

            <p class = "desc"> <b> Prayer Flicking Timing Guide </b> - As we all know, missing a prayer flick against a strong monster can 
            cause you to take massive damage if you're fighting a tough monster. Many of us have had to go through the dangerous process
            of learning to prayer flick and many of us still have trouble adjusting our timing when switching from one type of monster to another.
            The Prayer Flicking Timing Guide allows users to select the monster they'll be fighting and will then display a graphic indicating to the 
            user when the should be turning their prayer on and off. This timing of this graphic will be based off attack interval the monster the user is currently 
            fighting rather than simply flashing every tick like many prayer timing indicators. </p>
                
    </div>
</body>
</html>
