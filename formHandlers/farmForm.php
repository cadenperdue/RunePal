<?php 
    require_once '../config.php';
    $url = $_SERVER['QUERY_STRING'];
    
    parse_str($url, $params);
    $patches = array();
    foreach($params as $patch){
        $patches[] = $patch;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='../FarmGuide.css'>
    <script type = "text/javascript">
        var patchArr= <?php echo json_encode($patches); ?>;
	</script> 
    <script src = "FarmGuide.js"></script>
</head>
<body>



<!-- Links/Title goes here -->
    <div id = "topBorder"></div>
 	<header class="inner clearfix">
        <hgroup>
            <img id = "logo" src = "../images/OSRS.png">
            <h1 id="site-title"><a href="../RunePal.html" title="Homepage">RunePal</a>
            </h1>
            <h2 id="university-title"><a href="../RunePal.html" title="Homepage">An OSRS Companion Website</a>
            </h2>
            <p id = "loginAndRegister">
                <a id = "login" href = "../login.php">Login</a> | <a id = register" href = "../register.php">Register</a>
            </p>
        </hgroup>
     </header>

    <div>
    <nav>
        <ul id = "navBar">
        <li class = "liNav" id = "firstli"><a href = "../FarmGuide.html">Farming</a></li>
         <li class = "liNav"><a href = "../STASHUnit.php">STASHUnits</a></li>
         <li class = "liNav"><a href = "../PrayFlick.php">Flicking</a></li>
         <li class = "liNav"><a href="../About.html">About</a></li>
        <li class = "liNav"><a href="../Contact.html">Contact</a></li>        
       </ul>
    </nav>
    </div>
    <div id = "subNavBar"> 
        
        <a href="http://student2.cs.appstate.edu/perdueca/RunePal/RunePal.html">Home</a> 
        &#62;
        <a href="../FarmGuide.html">Farm Routes</a>

    </div>
    <h2 id = "headText"></h2>
    <form id = "teleportForm"></form>
</body>
</html>
