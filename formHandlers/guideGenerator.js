alert(teleArr);

if (teleArr.length > 0) {
    window.onload = function () {
        var imageDir = "../images/farmingRunRoutes/";
        document.getElementById("headText").textContent = "You may now click through this sequence of images to reach your desired patches.";
        teleArr.forEach(element => {
            
        });

    }
}
else {
    window.onload = function () {
        document.getElementById("headText").textContent = "It seems you didn't select any teleports to your patches so no images have been generated for your run.";
    }
}
