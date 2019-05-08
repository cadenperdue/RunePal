<?php
    require_once 'config.php';
   session_start();
   /*
   $es1, $es2, $es3, $es4, $es5, $es6, $es7, $es8, $es9, $es10, $es11, $es12, $es13, $es14, $es15;
   $es16, $es17, $es18, $es19, $es20, $es21, $es22, $es23, $es24, $es25, $es26, $es27, $es28, $es29;
   $ms1, $ms2, $ms3, $ms4, $ms5, $ms6, $ms7, $ms8, $ms9, $ms10, $ms11, $ms12, $ms13, $ms18, $ms19;
   $ms20, $ms21, $ms22, $ms23;
   $hs1, $hs2, $hs3, $hs4, $hs5, $hs6, $hs7, $hs8, $hs9, $hs10, $hs11, $hs12, $hs13, $hs14, $hs15;
   $els1, $els2, $els3, $els4, $els5, $els6, $els7, $els8, $els9, $els10, $els11, $els12;
   $els13, $els14, $els15, $els16;
   $mas1, $mas2, $mas3, $mas4, $mas5, $mas6, $mas7, $mas8, $mas9, $mas10, $mas11, $mas12, $mas13;
   $mas14, $mas15, $mas16, $mas17, $mas18, $mas19, $mas20, $mas21;
   */
	/*
   $name;
   $id;
   $easyArr = [];
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $name = $_SESSION['username'];
        $idNum = $_SESSION['id'];
        $row = [];
  
           
        
        $query = $link->query(" 
                    SELECT es1, es2, es3, es4, es5, es6, es7, es8, es9, es10, es11, es12, es13, es14, es15, es16, es17, es18, es19, es20, es21, es22, es23, es24, es25, es26, es27, es28, es29
                    FROM users WHERE username = \"$name\"
                    ");
        $easyArr = mysqli_fetch_array($query, MYSQLI_NUM);
        
   } 
	*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RunePal</title>
    <link rel='stylesheet' href='STASHUnit.css'>
    <script type = "text/javascript" src = "STASHUnit.js"></script>
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
        <a href="#">STASH Unit</a>

    </div>
    
    <!-- Other pages have a back button here -->
    
    <!-- Search By -->
    <h2 id = "IRD">Welcome To Your STASH Unit List</h2>

    <p>
	<?php
	    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        	echo "<h2> Welcome to the member's area, " . $_SESSION['username'] . "! </h2>";
		    $name = $_SESSION['username'];
        	$idNum = $_SESSION['id'];
        	$row = [];
  
           
            //pull easy units from database to populate form
        	$query = $link->query(" 
                    	SELECT es1, es2, es3, es4, es5, es6, es7, es8, es9, es10, es11, es12, es13, es14, es15, es16, es17, es18, es19, es20, es21, es22, es23, es24, es25, es26, es27, es28, es29
                    	FROM users WHERE username = \"$name\"
                   	 ");
       		$easyArr = mysqli_fetch_array($query, MYSQLI_NUM);
            //pull medium units from database to populate form
            $query = $link->query(" 
                    	SELECT ms1, ms2, ms3, ms4, ms5, ms6, ms7, ms8, ms9, ms10, ms11, ms12, ms13, ms14, ms15, ms16, ms17, ms18, ms19, ms20, ms21, ms22, ms23
                    	FROM users WHERE username = \"$name\"
                   	 ");
       		$medArr = mysqli_fetch_array($query, MYSQLI_NUM);       
            //pull hard units from database to populate form
            $query = $link->query(" 
                        SELECT hs1, hs2, hs3, hs4, hs5, hs6, hs7, hs8, hs9, hs10, hs11, hs12, hs13, hs14, hs15
                    	FROM users WHERE username = \"$name\"
                   	 ");
       		$hardArr = mysqli_fetch_array($query, MYSQLI_NUM); 
            //pull elite units from database to populate form
            $query = $link->query(" 
                        SELECT els1, els2, els3, els4, els5, els6, els7, els8, els9, els10, els11, els12, els13, els14, els15, els16
                    	FROM users WHERE username = \"$name\"
                   	 ");
            $eliteArr = mysqli_fetch_array($query, MYSQLI_NUM);
            //pull master units from database to populate form
            $query = $link->query(" 
                        SELECT mas1, mas2, mas3, mas4, mas5, mas6, mas7, mas8, mas9, mas10, mas11, mas12, mas13, mas14, mas15, mas16, mas17, mas18, mas19, mas20, mas21
                    	FROM users WHERE username = \"$name\"
                   	 ");
               $masterArr = mysqli_fetch_array($query, MYSQLI_NUM);
                     
        
          
        }
               
               


 
    	    else {
        		echo "<h2>Please log in if you want your data to be saved.</h2>";
           	 }
            
            

        
    

	?>
    </p>
    
    <div id = "easyStash"  class = "formHead">
        Click here for easy STASHs
            <form id = "easyForm" method = "get" action = "formHandlers/easyFormHandler.php" style = "display: none">
                <input type = "checkbox" name = "es1" value = 1 class = "ez" id = "lumbySwamp"> Lumbridge Swamp <br>
                <input type = "checkbox" name = "es2" value = 2 class = "ez" id = "draynorVillageB"> Draynor Village Bench<br>
				<input type = "checkbox" name = "es3" value = 3 class = "ez" id = "legendsGuild"> Legends Guild <br>
                <input type = "checkbox" name = "es4" value = 4 class = "ez" id = "portSarim"> Port Sarim <br>
				<input type = "checkbox" name = "es5" value = 5 class = "ez" id = "manor"> Draynor Manor <br>
                <input type = "checkbox" name = "es6" value = 6 class = "ez" id = "draynorVillageN"> North of Draynor Village <br>
				<input type = "checkbox" name = "es7" value = 7 class = "ez" id = "palace"> Varrock Palace Library <br>
                <input type = "checkbox" name = "es8" value = 8 class = "ez" id = "partyRoom"> Fally Party Room <br>
				<input type = "checkbox" name = "es9" value = 9 class = "ez" id = "beehive"> Catherby Beehive <br>
                <input type = "checkbox" name = "es10" value = 10 class = "ez" id = "rimmington"> North of Rimmington <br>
				<input type = "checkbox" name = "es11" value = 11 class = "ez" id = "leFaye"> West of Keep LeFaye <br>
                <input type = "checkbox" name = "es12" value = 12 class = "ez" id = "exam"> Exam Centre <br>
				<input type = "checkbox" name = "es13" value = 13 class = "ez" id = "ticket"> Duel Arena Ticket Office <br>
                <input type = "checkbox" name = "es14" value = 14 class = "ez" id = "gemStore"> Fally Gem Store <br>
				<input type = "checkbox" name = "es15" value = 15 class = "ez" id = "aubury"> Aubury's Rune Shop <br>
				<input type = "checkbox" name = "es16" value = 16 class = "ez" id = "tower"> Wizard Tower Bridge <br>
                <input type = "checkbox" name = "es17" value = 17 class = "ez" id = "silvearea"> Silvarea Limestone Mine <br>
				<input type = "checkbox" name = "es18" value = 18 class = "ez" id = "mud"> Mudskipper Point <br>
                <input type = "checkbox" name = "es19" value = 19 class = "ez" id = "alkMine"> Al Kharid Mine <br>
				<input type = "checkbox" name = "es20" value = 20 class = "ez" id = "lumbyWheat"> Lumbridge Wheat Field <br>
                <input type = "checkbox" name = "es21" value = 21 class = "ez" id = "rimMine"> Rimmington Mine <br>
				<input type = "checkbox" name = "es22" value = 22 class = "ez" id = "eastAr"> East Ardougne Mill <br>
                <input type = "checkbox" name = "es23" value = 23 class = "ez" id = "taverly"> Stone Circle in Taverly <br>
				<input type = "checkbox" name = "es24" value = 24 class = "ez" id = "zoo"> East Ardougne Zoo <br>
                <input type = "checkbox" name = "es25" value = 25 class = "ez" id = "fish"> Fishing Guild <br>
				<input type = "checkbox" name = "es26" value = 26 class = "ez" id = "sinc"> South of Sinclair Mansion <br>
                <input type = "checkbox" name = "es27" value = 27 class = "ez" id = "lumber"> Lumber Yard <br>
				<input type = "checkbox" name = "es28" value = 28 class = "ez" id = "court"> Varrock Palace Courtyard <br>
                <input type = "checkbox" name = "es29" value = 29 class = "ez" id = "ge"> GE Entrance <br>
                <input type = "submit" id = "easySubmit" class = "generateButton" value = "Update Easy List">
            </form>  
    </div> 
    <div id = "mediumStash" class = "formHead">
        Click here for medium STASHs
        <form id = "medForm" method = "get" action = "formHandlers/mediumFormHandler.php" style = "display: none">
            <input type = "checkbox" name = "ms1" value = 1 class = "med" id = "canifisMid"> Canifis Centre <br>
            <input type = "checkbox" name = "ms2" value = 2 class = "med" id = "barbVill"> East of Barbarian Village Bridge<br>
			<input type = "checkbox" name = "ms3" value = 3 class = "med" id = "casWars"> Castle Wars <br>
            <input type = "checkbox" name = "ms4" value = 4 class = "med" id = "gnomeAgility"> Gnome Stronghold Agility Course <br>
			<input type = "checkbox" name = "ms5" value = 5 class = "med" id = "observe"> Observatory <br>
            <input type = "checkbox" name = "ms6" value = 6 class = "med" id = "digsite"> The Digsite <br>
			<input type = "checkbox" name = "ms7" value = 7 class = "med" id = "shantay"> Shantay Pass <br>
            <input type = "checkbox" name = "ms8" value = 8 class = "med" id = "catBank"> Catherby Bank <br>
			<input type = "checkbox" name = "ms9" value = 9 class = "med" id = "harryFish"> Harry's Fishing Shop <br>
            <input type = "checkbox" name = "ms10" value = 10 class = "med" id = "edgeGen"> Edgeville General Store <br>
			<input type = "checkbox" name = "ms11" value = 11 class = "med" id = "arcLib"> Arceuus Library <br>
            <input type = "checkbox" name = "ms12" value = 12 class = "med" id = "maus"> Mausolem <br>
			<input type = "checkbox" name = "ms13" value = 13 class = "med" id = "taiGrove"> Tai Bwo Wannai Grove <br>
            <input type = "checkbox" name = "ms14" value = 14 class = "med" id = "barbAgil"> Barbarian Agility Course <br>
			<input type = "checkbox" name = "ms15" value = 15 class = "med" id = "yaniBank"> Yanille Bank <br>
            <input type = "checkbox" name = "ms16" value = 16 class = "med" id = "ogreEnc"> Ogre Enclosure <br>
			<input type = "checkbox" name = "ms17" value = 17 class = "med" id = "hickArch"> Hickton's Archery Emporium <br>
            <input type = "checkbox" name = "ms18" value = 18 class = "med" id = "lumCave"> Lumbridge Swamp Cave <br>
			<input type = "checkbox" name = "ms18" value = 19 class = "med" id = "courthouse"> Seer's Village Courthouse <br>
            <input type = "checkbox" name = "ms20" value = 20 class = "med" id = "telEquip"> TzHaar-Hur-Tel's Equipment Store  <br>
			<input type = "checkbox" name = "ms21" value = 21 class = "med" id = "shayComb"> Shayzien Combat Ring <br>
            <input type = "checkbox" name = "ms22" value = 22 class = "med" id = "drayJail"> Draynor Jail <br>
			<input type = "checkbox" name = "ms23" value = 23 class = "med" id = "mtKarN"> Mount Karuulm <br>
            <input type = "submit" id = "mediumSubmit" class = "generateButton" value = "Update Medium List">
        </form>
    </div>
    <div id = "hardStash" class = "formHead" >
        Click here for hard STASHs
        <form id = "hardForm" method = "get" action = "formHandlers/hardFormHandler.php" style = "display: none">
            <input type = "checkbox" name = "hs1" value = 1 class = "hard" id = "canifisMid"> Chaos Temple <br>
            <input type = "checkbox" name = "hs2" value = 2 class = "hard" id = "barbVill"> Lighthouse<br>
			<input type = "checkbox" name = "hs3" value = 3 class = "hard" id = "casWars"> Wilderness Bandit Shop <br>
            <input type = "checkbox" name = "hs4" value = 4 class = "hard" id = "gnomeAgility"> Jokul's Tent <br>
			<input type = "checkbox" name = "hs5" value = 5 class = "hard" id = "observe"> Shilo Village Bank <br>
            <input type = "checkbox" name = "hs6" value = 6 class = "hard" id = "digsite"> NE Kharazi Jungle <br>
			<input type = "checkbox" name = "hs7" value = 7 class = "hard" id = "shantay"> Jiggig Dungeon Entrance <br>
            <input type = "checkbox" name = "hs8" value = 8 class = "hard" id = "catBank"> Hosidius Mess Hall <br>
			<input type = "checkbox" name = "hs9" value = 9 class = "hard" id = "harryFish"> Fishing Guild Bank <br>
            <input type = "checkbox" name = "hs10" value = 10 class = "hard" id = "edgeGen"> Sopanheim Pyramid <br>
			<input type = "checkbox" name = "hs11" value = 11 class = "hard" id = "arcLib"> Musa Point <br>
            <input type = "checkbox" name = "hs12" value = 12 class = "hard" id = "maus"> Inside Exam Centre <br>
			<input type = "checkbox" name = "hs13" value = 13 class = "hard" id = "taiGrove"> White Wolf Mountain <br>
            <input type = "checkbox" name = "hs14" value = 14 class = "hard" id = "barbAgil"> Wilderness Volcano <br>
			<input type = "checkbox" name = "hs15" value = 15 class = "hard" id = "yaniBank"> Agility Pyramid Course <br>
            <input type = "submit" id = "hardSubmit" class = "generateButton" value = "Update Hard List">
        </form>
    </div>
    <div id = "eliteStash"  class = "formHead">
        Click here for elite STASHs
        <form id = "eliteForm" method = "get" action = "formHandlers/eliteFormHandler.php" style = "display: none">
            <input type = "checkbox" name = "els1" value = 1 class = "elite" id = "ardChurch"> West Ardy Church <br>
            <input type = "checkbox" name = "els2" value = 2 class = "elite" id = "lavaMaze"> Lava Maze Dungeon Entrance<br>
			<input type = "checkbox" name = "els3" value = 3 class = "elite" id = "warBank"> Warrior's Guild Bank <br>
            <input type = "checkbox" name = "els4" value = 4 class = "elite" id = "fishPlat"> Fishing Platform <br>
			<input type = "checkbox" name = "els5" value = 5 class = "elite" id = "trollTop"> Top of Trollheim <br>
            <input type = "checkbox" name = "els6" value = 6 class = "elite" id = "ancCav"> Ancient Cavern <br>
			<input type = "checkbox" name = "els7" value = 7 class = "elite" id = "shayCom"> Shayzien Command Tent <br>
            <input type = "checkbox" name = "els8" value = 8 class = "elite" id = "arGStall"> Ardougne Gem Stall<br>
			<input type = "checkbox" name = "els9" value = 9 class = "elite" id = "fremMine"> Fremminik Isles Mine <br>
            <input type = "checkbox" name = "els10" value = 10 class = "elite" id = "shadDun"> Inside Shadow Dungeon <br>
			<input type = "checkbox" name = "els11" value = 11 class = "elite" id = "edgeMon"> Edgeville Monastary <br>
            <input type = "checkbox" name = "els12" value = 12 class = "elite" id = "slayTop"> Slayer Tower Top Floor <br>
			<input type = "checkbox" name = "els13" value = 13 class = "elite" id = "founHer"> Fountain of Heroes <br>
            <input type = "checkbox" name = "els14" value = 14 class = "elite" id = "trollFlo"> Trollweiss Flowers <br>
			<input type = "checkbox" name = "els15" value = 15 class = "elite" id = "legGuild"> Legends Guild <br>
            <input type = "checkbox" name = "els16" value = 16 class = "elite" id = "fightBar"> Fight Arena Bar <br>
            <input type = "submit" id = "eliteSubmit" class = "generateButton"  value = "Update Elite List">
        </form>
    </div>
    <div id = "masterStash" class = "formHead" >
        Click her for master STASHs
        <form id = "masterForm" method = "get" action = "formHandlers/masterFormHandler.php" style = "display: none">
            <input type = "checkbox" name = "mas1" value = 1 class = "mas" id = "canifisMid"> Lava Dragon Isle <br>
            <input type = "checkbox" name = "mas2" value = 2 class = "mas" id = "barbVill"> Barrows Chest<br>
			<input type = "checkbox" name = "mas3" value = 3 class = "mas" id = "casWars"> Castle Drakan <br>
            <input type = "checkbox" name = "mas4" value = 4 class = "mas" id = "gnomeAgility"> Soul Alter <br>
			<input type = "checkbox" name = "mas5" value = 5 class = "mas" id = "observe"> Entrana Church <br>
            <input type = "checkbox" name = "mas6" value = 6 class = "mas" id = "digsite"> Catacombs Centre <br>
			<input type = "checkbox" name = "mas7" value = 7 class = "mas" id = "shantay"> Zamorak's Fortress <br>
            <input type = "checkbox" name = "mas8" value = 8 class = "mas" id = "catBank"> Iban's Temple <br>
			<input type = "checkbox" name = "mas9" value = 9 class = "mas" id = "harryFish"> Magic Axe Hut <br>
            <input type = "checkbox" name = "mas10" value = 10 class = "mas" id = "edgeGen"> Death Alter <br>
			<input type = "checkbox" name = "mas11" value = 11 class = "mas" id = "arcLib"> Elf Camp <br>
            <input type = "checkbox" name = "mas12" value = 12 class = "mas" id = "maus"> Enchanted Valley <br>
			<input type = "checkbox" name = "mas13" value = 13 class = "mas" id = "taiGrove"> Zul-Andra <br>
            <input type = "checkbox" name = "mas14" value = 14 class = "mas" id = "barbAgil"> 7th Room of Pyramid Plunder <br>
			<input type = "checkbox" name = "mas15" value = 15 class = "mas" id = "yaniBank"> Warriors Guild Bank <br>
            <input type = "checkbox" name = "mas16" value = 16 class = "mas" id = "ogreEnc"> Mor Ul Rek Gem Store <br>
			<input type = "checkbox" name = "mas17" value = 17 class = "mas" id = "hickArch"> Goblin Village <br>
            <input type = "checkbox" name = "mas18" value = 18 class = "mas" id = "lumCave"> KBD Lair <br>
			<input type = "checkbox" name = "mas18" value = 19 class = "mas" id = "courthouse"> Queen Ellamaria's Garden <br>
            <input type = "checkbox" name = "mas20" value = 20 class = "mas" id = "telEquip"> Yanille Watchtower  <br>
			<input type = "checkbox" name = "mas21" value = 21 class = "mas" id = "shayComb"> Behind Miss Schism <br>
            <input type = "submit" id = "masterSubmit" class = "generateButton" value = "Update Master List">
        </form>
    </div>
    <p id = "test">
        
    </p>
	<script type = "text/javascript">
    
        var easyStashArray = <?php echo json_encode($easyArr); ?>;
        var medStashArray = <?php echo json_encode($medArr); ?>;
        var hardStashArray = <?php echo json_encode($hardArr); ?>;
        var eliteStashArray = <?php echo json_encode($eliteArr); ?>;
        var masterStashArray = <?php echo json_encode($masterArr); ?>;
    
	</script> 
    <script type = "text/javascript" src = "STASHUnit.js"></script>
</body>
</html>
