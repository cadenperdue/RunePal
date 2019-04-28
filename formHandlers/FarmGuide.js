//alert(patchArr.length);



var allPatchesArr = ["fallyHerb", "ectoHerb", "catherbyHerb", "ardyHerb", "hosiHerb", "guildHerb", "harmonyHerb", "trollheimHerb", "weissHerb", "lumbridgeTree", "varrockTree", "fallyTree", "taverlyTree", "gnomeTree", "guildTree", "strongholdFuit", "catherbyFruit", "mazeFruit", "brimhavenFruit", "lletyaFruit", "guildFruit"];
//if any patches were submitted through the form on the previous page, load windown and generate 
//a form based on the URL variables echod here through php
if(patchArr.length > 0){
    window.onload = function(){
        document.getElementById("headText").textContent = "Now please select the teleport you'll use for each patch.";
        var form = document.createElement("form");
        form.method = "get";
        form.action = "teleForm.php";
        document.body.appendChild(form);
        patchArr.forEach(element => {
            if(element.localeCompare("fallyHerb") == 0)
            { 
                var fallyPatch = document.createElement("div");
                fallyPatch.textContent = "Falador Herb Patch Teleports";
                var s = document.createElement("div");

                s.innerHTML = '<input type = "radio" name = "fallyHerbTeles" value = "explorersRing"> Explorers Ring <br>';
                s.innerHTML += '<input type = "radio" name = "fallyHerbTeles" value = "draynorSpiritTree"> Draynor Spirit Tree <br>';                  
                s.innerHTML += '<input type = "radio" name = "fallyHerbTeles" value = "draynorGlory"> Amulet of Glory to Draynor <br>';
                s.innerHTML += '<input type = "radio" name = "fallyHerbTeles" value = "miningSkills"> Skills Necklace to Mining Guild <br>';
                s.innerHTML += '<input type = "radio" name = "fallyHerbTeles" value = "fallyWealth"> Ring of Wealth to Falador <br>';
                s.innerHTML += '<input type = "radio" name = "fallyHerbTeles" value = "fallyTele"> Falador Teleport <br>';

                form.appendChild(fallyPatch);
                form.appendChild(s);
            }
            if(element.localeCompare("ectoHerb") == 0)
            { 
                var div = document.createElement("div");
                div.textContent = "Ectofuntus Herb Patch Teleports";
                var inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "ectoHerbTeles" value = "ectoFairyRing"> Fairy Ring ALQ <br>';
                inputs.innerHTML += '<input type = "radio" name = "ectoHerbTeles" value = "ectoEctophial"> Ectophial <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "ectoHerbTeles" value = "ectoFenkenstrain"> Fenkenstrain Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "ectoHerbTeles" value = "ectoKharyll"> Kharyll Teleport <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("catherbyHerb") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Catherby Herb Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "catherbyHerbTeles" value = "catherbyHerbTeleport"> Catherby Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "catherbyHerbTeles" value = "camelotHerbTeleport"> Camelot Teleport <br>';                  
               

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("ardyHerb") == 0)
            { 
                var div = document.createElement("div");
                div.textContent = "Ardougne Herb Patch Teleports";
                var inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "ardyHerbTeles" value = "ardyCloak"> Ardougne Cloak (level 2 or higher) <br>';
                inputs.innerHTML += '<input type = "radio" name = "ardyHerbTeles" value = "skillsFishingGuild"> Skills Necklace to Fishing Guild <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "ardyHerbTeles" value = "combatRangeGuild"> Combat Bracelet to Ranging Guild <br>';
                inputs.innerHTML += '<input type = "radio" name = "ardyHerbTeles" value = "questPointCape"> Quest Point Cape Tele <br>';
                inputs.innerHTML += '<input type = "radio" name = "ardyHerbTeles" value = "ardyFairyRing"> Fairy Ring BLR <br>';
                inputs.innerHTML += '<input type = "radio" name = "ardyHerbTeles" value = "ardyTele"> Ardougne Teleport <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            } 
            if(element.localeCompare("hosiHerb") == 0)
            { 
                var div = document.createElement("div");
                div.textContent = "Hosidius Herb Patch Teleports";
                var inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "hosiHerbTeles" value = "xericTalisman"> Xeric\'s Talisman to Xeric\'s Glade <br>';
                inputs.innerHTML += '<input type = "radio" name = "hosiHerbTeles" value = "hosiHouse"> Hosidius House Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "hosiHerbTeles" value = "titheFarm"> Tithe Farm Minigame Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "hosiHerbTeles" value = "skillsWoodCuttingGuild"> Skills Necklace to Woodcutting Guild <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("guildHerb") == 0)
            { 
                var div = document.createElement("div");
                div.textContent = "Farming Guild Herb Patch Teleports";
                var inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "guildHerbTeles" value = "herbSkillsFarming"> Skills Necklace to Farming Guild <br>';
                inputs.innerHTML += '<input type = "radio" name = "guildHerbTeles" value = "herbFarmingCape"> Farming Cape Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "guildHerbTeles" value = "herbSpiritTree"> Farming Guild Spirit Tree <br>';
                inputs.innerHTML += '<input type = "radio" name = "guildHerbTeles" value = "herbGuildFairy"> Fairy Ring CIR <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }     
            if(element.localeCompare("harmonyHerb") == 0)
            { 
                var div = document.createElement("div");
                div.textContent = "Harmony Herb Patch Teleports";
                var inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "harmonyHerbTeles" value = "harmonyTele"> Harmony Island Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "harmonyHerbTeles" value = "mosLeHarmlessScroll"> Mos Le\'Harmless Teleport Scroll  <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "harmonyHerbTeles" value = "ectophialHarmony"> Ectophial to Port Phasmatys to Mos Le\'Harmless to Brother Tanquility <br>';
                inputs.innerHTML += '<input type = "radio" name = "harmonyHerbTeles" value = "troubleBrewingTele"> Teleport to Trouble Brewing to Brother Tranquility <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("trollheimHerb") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Trollheim Herb Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "trollheimHerbTeles" value = "stonyBasaltTeleport"> Stony Basalt Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "trollheimHerbTeles" value = "trollheimTeleport"> Trollheim Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "trollheimHerbTeles" value = "gamesNecklaceBurthrope"> Games Necklace to Burthrope <br>';                  
               

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("weissHerb") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Weiss Herb Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "weissHerbTeles" value = "icyBasaltTeleport"> Icy Basalt Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "weissHerbTeles" value = "weissFairyRing"> Fairy Ring DKS <br>';                  
               

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("lumbridgeTree") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Lumbridge Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "lumbridgeTreeTeles" value = "lumbyHomeTele"> Lumbridge Home Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "lumbridgeTreeTeles" value = "lumbySpellTele"> Standard Spellbook Lumbridge Teleport <br>';                  
               

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("varrockTree") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Varrock Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "varrockTreeTeles" value = "varrockTele"> Varrock Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "varrockTreeTeles" value = "geSpiritTree"> Grand Exchange Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "varrockTreeTeles" value = "geWealth"> Ring of Wealth to Grand Exchange <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("fallyTree") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Falador Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "faladorTreeTeles" value = "fallyWealthTree"> Ring of Wealth to Falador Park <br>';
                inputs.innerHTML += '<input type = "radio" name = "faladorTreeTeles" value = "fallyTeleTree"> Falador Teleport <br>';                  

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("taverleyTree") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Taverley Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "taverleyTreeTeles" value = "balloonTransportTaverley"> Balloon Transport to Taverley <br>';
                inputs.innerHTML += '<input type = "radio" name = "taverleyTreeTeles" value = "taverleyHouseTele"> Taverley House Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "taverleyTreeTeles" value = "taverleyGamesNecklace"> Games Necklace to Burthrope<br>';
                inputs.innerHTML += '<input type = "radio" name = "taverleyTreeTeles" value = "fallyTeleTaverley"> Falador Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "taverleyTreeTeles" value = "warriorsGuildCombat"> Warriors Guild Combat Bracelet Teleport <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("gnomeTree") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Gnome Stronghold Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "gnomeTreeTeles" value = "slayerRingTreed"> Slayer Ring to Stronghold <br>';
                inputs.innerHTML += '<input type = "radio" name = "gnomeTreeTeles" value = "strongholdSpiritTree"> Spirit Tree to Stronghold <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "gnomeTreeTeles" value = "balloonTransportStrongholdTree"> Balloon Transport to Stronghold<br>';
                inputs.innerHTML += '<input type = "radio" name = "gnomeTreeTeles" value = "seedPodTree"> Grand/Royal Seed Pod <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "gnomeTreeTeles" value = "gnomeGliderStrongholdTree"> Gnome Glider to Stronghold <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("guildTree") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Farming Guild Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "guildTreeTeles" value = "treeSkillsFarming"> Skills Necklace to Farming Guild <br>';
                inputs.innerHTML += '<input type = "radio" name = "guildTreeTeles" value = "treeFarmingCape"> Farming Cape Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "guildTreeTeles" value = "treeSpiritTree"> Farming Guild Spirit Tree <br>';
                inputs.innerHTML += '<input type = "radio" name = "guildTreeTeles" value = "treeGuildFairy"> Fairy Ring CIR <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("strongholdFuit") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Gnome Stronghold Fruit Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "gnomeFruitTeles" value = "balloonStrongholdFruit"> Balloon Transport to Gnome Stronhold <br>';
                inputs.innerHTML += '<input type = "radio" name = "gnomeFruitTeles" value = "strongholdSpiritTree"> Spirit Tree to Stronghold <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "gnomeFruitTeles" value = "seedPodFruit"> Grand/Royal Seed Pod<br>';
                inputs.innerHTML += '<input type = "radio" name = "gnomeFruitTeles" value = "slayerRingFruit"> Slayer Ring to Stronghold <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "gnomeFruitTeles" value = "gnomeGliderStrongholdTree"> Gnome Glider to Stronghold <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("catherbyFruit") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Catherby Fruit Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "catherbyFruitTeles" value = "catherbyTeleFruit"> Catherby Teleport <br>';
                inputs.innerHTML += '<input type = "radio" name = "catherbyFruitTeles" value = "whiteWolfGlider"> Gnome Glider to White Wolf Mountain <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "catherbyFruitTeles" value = "camelotTeleFruit"> Camelot Teleport <br>';
                
                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("mazeFruit") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Gnome Maze Fruit Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "mazeFruitTeles" value = "mazeSpiritTree"> Spirit Tree to Gnome Village, then follow Elkoy out <br>';
                inputs.innerHTML += '<input type = "radio" name = "mazeFruitTeles" value = "mazeFairyRing"> Fairy Ring CIQ <br>';                  
                
                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("brimhavenFruit") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Brimhaven Fruit Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "brimhavenFruitTeles" value = "brimhavenHouseTele"> Brimhaven House Tele <br>';
                inputs.innerHTML += '<input type = "radio" name = "brimhavenFruitTeles" value = "brimhavenSpiritTree"> Spirit Tree in Brimhaven <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "brimhavenFruitTeles" value = "brimhavenCharterShip"> Take any Chartership to Brimhaven<br>';
                inputs.innerHTML += '<input type = "radio" name = "brimhavenFruitTeles" value = "karamjaGloves"> Karamja Gloves 3/4 then take Cart to Shilo Village <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "brimhavenFruitTeles" value = "brimhavenFairyRing"> Fairy Ring BJR <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("lletyaFruit") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Lletya Fruit Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "lletyaFruitTeles" value = "teleportCrystal"> Teleport Crystal <br>';
                inputs.innerHTML += '<input type = "radio" name = "lletyaFruitTeles" value = "elfCampTeleport"> Elf Camp Teleport Scroll (Not Recommended) <br>';                  
                
                form.appendChild(div);
                form.appendChild(inputs);
            }
            if(element.localeCompare("guildFruit") == 0)
            { 
                let div = document.createElement("div");
                div.textContent = "Farming Guild Fruit Tree Patch Teleports";
                let inputs = document.createElement("div");

                inputs.innerHTML = '<input type = "radio" name = "guildFruitTeles" value = "fruitSkillsFarming"> Skills Necklace to Farming Guild <br>';
                inputs.innerHTML += '<input type = "radio" name = "guildFruitTeles" value = "fruitFarmingCape"> Farming Cape Teleport <br>';                  
                inputs.innerHTML += '<input type = "radio" name = "guildFruitTeles" value = "fruitSpiritTree"> Farming Guild Spirit Tree <br>';
                inputs.innerHTML += '<input type = "radio" name = "guildFruitTeles" value = "fruitGuildFairy"> Fairy Ring CIR <br>';

                form.appendChild(div);
                form.appendChild(inputs);
            }
            
            
    });
    var submitButton = document.createElement("div");
    submitButton.innerHTML = '<input type = "submit" value = "submit form">'
    form.appendChild(submitButton)
}
}
else{
    window.onload = function(){
        document.getElementById("headText").textContent = "It seems you didn't select any patches to visit. Please go back and select at least one patch";
    }
}


