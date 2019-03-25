var herb;
var trees;
var fruitTrees;
var hops;
var bush;
var cactus;
var special;
function getChecks(){
    herb = document.getElementByID("herbs").checked;
    trees = document.getElementByID("trees").checked;
    fruitTrees = document.getElementByID("fuitTrees").checked;
    hops = document.getElementByID("hops");
    bush = document.getElementByID("bush");
    cactus = document.getElementByID("cactus");
    special = document.getElementByID("special");
}
var farmsButton = document.getElementByID("submitButton");
if (farmsButton.addEventListener)
    farmsButton.addEventListener("click", getChecks(), false);
