<?php
    require_once 'config.php';
   session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='PrayFlick.css'>
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
        <a href="#">Prayer Flicking</a>

    </div>
    
    
    <h2 id = "IRD">Welcome To Our Prayer Flicking Guide</h2>
    
    <form action="search.php" method="get">
        <label>
            Search
            <input type="text" name="keywords" autocomplete="off">
         </label>

         <input type="submit"  value="Submit">
    </form>
    
</body>
</html>
