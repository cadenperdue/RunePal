<?php
    require_once '../config.php';
    session_start();
    $url = $_SERVER['QUERY_STRING'];
    
    parse_str($url, $params);
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $name = $_SESSION['username'];
        $idNum = $_SESSION['id'];
        $row = [];

       
        
        $query = $link->query(" 
                    SELECT ms1, ms2, ms3, ms4, ms5, ms6, ms7, ms8, ms9, ms10, ms11, ms12, ms13, ms14, ms15, ms16, ms17, ms18, ms19, ms20, ms21, ms22, ms23
                    FROM users WHERE username = \"$name\"
                    ");
        $medArr = mysqli_fetch_array($query, MYSQLI_NUM);
        $paramsLast = count($params) - 1;
        
        //functionality for medium update
            foreach($params as $unit){
                $currQuery = "ms" . $unit;
                $currQuery = mysql_real_escape_string($currQuery);
                $sql = "UPDATE users SET `$currQuery` = 1 WHERE username = \"$name\" ";
            
                if(mysqli_query($link, $sql)){
                //echo("successful update");

                }
                else{
                    echo "wild: " . mysqli_error($conn);
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
            <h2 id="university-title"><a href="./RunePal.html" title="Homepage">An OSRS Companion Website</a>
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
        Your Medium STASH Unit list has been updated!
    </div>
</body>
</head>
