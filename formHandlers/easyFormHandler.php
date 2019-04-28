<?php
    require_once '../config.php';
    session_start();
    $url = $_SERVER['QUERY_STRING'];
    
    parse_str($url, $params);
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $name = $_SESSION['username'];
        $idNum = $_SESSION['id'];

        $query = $link->query(" 
                    SELECT es1, es2, es3, es4, es5, es6, es7, es8, es9, es10, es11, es12, es13, es14, es15, es16, es17, es18, es19, es20, es21, es22, es23, es24, es25, es26, es27, es28, es29
                    FROM users WHERE username = \"$name\"
                    ");
        $easyArr = mysqli_fetch_array($query, MYSQLI_NUM);
        
        //functionality for easy update         
        foreach($params as $unit){
            $currQuery = "es" . $unit;
            $currQuery = mysql_real_escape_string($currQuery);
            $sql = "UPDATE users SET `$currQuery` = 1 WHERE username = \"$name\" ";
            
            if(mysqli_query($link, $sql)){
                //echo("successful update");

            }
            else{
                  //  echo "ez error: " . mysqli_error($conn);
            }   
        }       
    } 
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='../RunePal.css'> 
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
                <a id = "login" href = "../login.php">Login</a> | <a id = "register" href = "./register.php">Register</a>
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
    </div>


    <div>
        Your Easy STASH Unit list has been updated!
    </div>
    
</body>
</head>
