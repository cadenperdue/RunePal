<?php 
    require_once '../config.php';
    $url = $_SERVER['QUERY_STRING'];
    
    parse_str($url, $params);
    $teleports = array();
    foreach($params as $tele){
        $teleports[] = $tele;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='../FarmGuide.css'>
    
    <!-- <script src = "guideGenerator.js"></script> -->
</head>
<body>



<!-- Links/Title goes here -->
    <div id = "topBorder"></div>
 	<header class="inner clearfix">
        <hgroup>
            <img id = "logo" src = "../images/OSRS.png">
            <h1 id="site-title"><a href="../RunePal.php" title="Homepage">RunePal</a>
            </h1>
            <h2 id="university-title"><a href="../RunePal.php" title="Homepage">An OSRS Companion Website</a>
            </h2>
            <p id = "loginAndRegister">
                <a id = "login" href = "../login.php">Login</a> | <a id = register" href = "../register.php">Register</a>
            </p>
        </hgroup>
     </header>

    <div>
    <nav>
        <ul id = "navBar">
        <li class = "liNav" id = "firstli"><a href = "../FarmGuide.php">Farming</a></li>
         <li class = "liNav"><a href = "../STASHUnit.php">STASHUnits</a></li>
         <li class = "liNav"><a href = "../PrayFlick.php">Flicking</a></li>
         <li class = "liNav"><a href="../About.php">About</a></li>
        <li class = "liNav"><a href="../Contact.php">Contact</a></li>        
       </ul>
    </nav>
    </div>
    <div id = "subNavBar"> 
        
        <a href="http://student2.cs.appstate.edu/perdueca/RunePal/RunePal.php">Home</a> 
        &#62;
        <a href="../FarmGuide.php">Farm Routes</a>

    </div>
    <h2 id = "headText"></h2>
    <div class = "slideShowContainer">
        <img id = "currImg">
    </div>
    <script language = "JavaScript">
        var teleArr= <?php echo json_encode($teleports); ?>;
        var headText = document.getElementById("headText");
        if(teleArr.length > 0){
            headText.innerText = "Click the image to cycle through";
            var currImg = document.getElementById("currImg");
            var imageDir = "../images/farmingRunRoutes/"
            var firstImage = imageDir + teleArr[0] + ".png";
            currImg.src = firstImage;
            var i = 1;
            currImg.onclick = function(){       
                    currImg.src = imageDir + teleArr[i] + ".png";
                    i++;
                    if(i == teleArr.length){
                        i = 0;
                    }
            }
        }
        else
        {
            headText.innerHTML = "You haven't selected any teleports. Please go back and select at least one teleport";
        }
	</script> 
</body>
</html>