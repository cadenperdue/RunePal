
var easyLink = document.getElementById("easyStash");
var medLink = document.getElementById("mediumStash");
var hardLink = document.getElementById("hardStash");
var elLink = document.getElementById("eliteStash");
var masLink = document.getElementById("masterStash");
var c = document.getElementById("easyUnits");
if(easyLink.addEventListener){
    easyLink.addEventListener("click", function(){
        showList(easyLink);
    }, false);
}
if(medLink.addEventListener){
    medLink.addEventListener("click", function(){
        showList(medLink);
    }, false);
}
if(hardLink.addEventListener){
    hardLink.addEventListener("click", function(){
        showList(hardLink);
    }, false);
}
if(elLink.addEventListener){
    elLink.addEventListener("click", function(){
        showList(elLink);
    }, false);
}
if(masLink.addEventListener){
    masLink.addEventListener("click", function(){
        showList(masLink);
    }, false);
}

function showList(link){
    var x = link.children;      
    for (let item of x){    
        item.style.display = "block";
    }
}



//populate easy form
var easyFormArray = document.getElementsByClassName("ez");

for(var i=0;i<easyStashArray.length;i++){
    if(easyStashArray[i] == 1){
        easyFormArray[i].checked = true;
    }
}


//populate medium form
var medFormArray = document.getElementsByClassName("med");

for(var i=0;i<medStashArray.length;i++){
    if(medStashArray[i] == 1){
        medFormArray[i].checked = true;
    }
}

//populate hard form
var hardFormArray = document.getElementsByClassName("hard");

for(var i=0;i<hardStashArray.length;i++){
    if(hardStashArray[i] == 1){
        hardFormArray[i].checked = true;
    }
}

//populate elite form
var eliteFormArray = document.getElementsByClassName("elite");

for(var i=0;i<eliteStashArray.length;i++){
    if(eliteStashArray[i] == 1){
        eliteFormArray[i].checked = true;
    }
}

//populate master form
var masterFormArray = document.getElementsByClassName("mas");

for(var i=0;i<masterStashArray.length;i++){
    if(masterStashArray[i] == 1){
        masterFormArray[i].checked = true;
    }
}