var speed = document.getElementById("attkSpeed").textContent;
var name = document.getElementById("name").textContent;
var type = document.getElementById("attackType").textContent;

function displayIcon(){
    var iconPlace = document.getElementById("icon");
    img = document.createElement("img");
    if(type.localeCompare("melee") == 0){
        img.src = 'images/prayMelee.PNG';
        
    }
    else if(type.localeCompare("mage") == 0){
        img.src = 'images/prayMage.PNG';
    }
    else if(type.localeCompare("range") == 0){
        img.src = 'images/prayRange.PNG';
    }
    else{
        icon.textContent = "This enemy has hybrid style attacks, you won't be able to flick against their attacks";
        return;
    }
    src = document.getElementById("icon");
    src.appendChild(img);

   
}
displayIcon();


        

