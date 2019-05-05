<?php
    require_once 'config.php';
   session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='Contact.css'>
</head>
<body>




    <div id = "topBorder"></div>
 	<header class="inner clearfix">
        <hgroup>
            <img id = "logo" src = "images/OSRS.png">
            <h1 id="site-title"><a href="RunePal.php" title="Homepage">RunePal</a>
            </h1>
            <h2 id="subTitle"><a id = "titleLink" href="RunePal.php" title="Homepage">An OSRS Companion Website</a>
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
        <a href="Contact.php">Contact</a>

    </div>
    <div id = "h1Flex">
        <h1> Questions? Concerns? Contact me here! </h1>
    </div>
    <br><br>
    <h2>
        Email me at <a class = "info" href = "mailto:perdueca@appstate.edu">perdueca@appstate.edu</a>. <br>

        <br>
    </h2>

    <h2>
        Visit my <a class = "info" href = "https://github.com/cadenperdue">github</a> 
        <br><br>
    </h2>

    <h2> 
        Or find me on <a class = "info" href = "https://www.linkedin.com/in/caden-perdue-87586b177/">LinkedIn</a>
        <br><br>
    </h2> 

</body>
</html> 
