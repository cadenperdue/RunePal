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
                    SELECT mas1, mas2, mas3, mas4, mas5, mas6, mas7, mas8, mas9, mas10, mas11, mas12, mas13, mas14, mas15, mas16, mas17, mas18, mas19, mas20, mas21
                    FROM users WHERE username = \"$name\"
                    ");
        $medArr = mysqli_fetch_array($query, MYSQLI_NUM);
        $paramsLast = count($params) - 1;
        
        //functionality for medium update
            foreach($params as $unit){
                $currQuery = "mas" . $unit;
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
            <h1 id="site-title"><a href="../RunePal.php" title="Homepage">RunePal</a>
            </h1>
            <h2 id="university-title"><a href="../RunePal.php" title="Homepage">An OSRS Companion Website</a>
            </h2>
            <p id = "loginAndRegister">
                <a id = "login" href = "../login.php">Login</a> | <a id = "register" href = "./register.php">Register</a>
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
    </div>


    <div>
        Your Master STASH Unit list has been updated!
    </div>
</body>
</head>
