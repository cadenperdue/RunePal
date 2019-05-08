
var speed = document.getElementById("attkSpeed").textContent;
var name = document.getElementById("name").textContent;
var type = document.getElementById("attackType").textContent;


function prayFlash(attkArray, imgEl){
     let arr = attkArray;
     let img = imgEl;
     let currTick = 0;
     setInterval(function(){
        img.src = arr[currTick % arr.length];
        currTick++;
    }, 600);
}

function displayIcon(){
    var iconPlace = document.getElementById("icon");
    var iconOnPlace = document.getElementById("iconOn");
    img = document.createElement("img");
    imgOn = document.createElement("img");
    var attackLoop = [];
    var prayOn;
    var prayOff;
   
         
    if(type.localeCompare("melee") == 0){
        img.src = 'images/prayMelee.PNG';
        img.id = 'prayImg';
        prayOff = 'images/prayMelee.PNG';
        prayOn = 'images/meleeOn.png';
    }
    else if(type.localeCompare("mage") == 0){
        img.src = 'images/prayMage.PNG';
        img.id = 'prayImg';
        prayOff = 'images/prayMage.PNG';
        prayOn = 'images/mageOn.png';
    }
    else if(type.localeCompare("range") == 0){
        img.src = 'images/prayRange.PNG';
        img.id = 'prayImg';
        prayOff = 'images/prayRange.PNG';
        prayOn = 'images/rangeOn.png';
    }
    else{
        icon.textContent = "This enemy has hybrid style attacks, you won't be able to flick against their attacks";
        return;
    }
    
    
    iconPlace.appendChild(img);
     
    for(var i = 0; i < (speed - 1); i++){
        attackLoop.push(prayOff);
        
    }
    attackLoop.push(prayOn);
    
  
    if(img.addEventListener)
        img.addEventListener("click",function(){
            prayFlash(attackLoop, img)
        }, false);
    
}


displayIcon();



