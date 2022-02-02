<?php
<!DOCTYPE html>
<html>
<title>POLLINATORS IDENTIFIERS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("bg.png");
  min-height: 100%;
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#pollinator" class="w3-button w3-block w3-black">POLLINATORS</a>
    </div>
    <div class="w3-col s3">
      <a href="#user" class="w3-button w3-block w3-black">USER MANUAL</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-padding-large">
    <span class="w3-text-white" style="font-size:90px"><b>POLLINATORS</b><br><b>IDENTIFIERS</b></span>
    <h6></h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.location='//a31c-35-227-39-179.ngrok.io'">START CLASSIFICATION</button></h6>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE POLLINATORS IDENTIFIERS</span></h5>
    <p>This website is a website that will allows user to classify the pollinators.</p>
    <p>In addition user also can gain information about the pollinators in this website</p>
    <div class="w3-panel w3-leftbar w3-sand">
      <p style = "font-size:30px" ><i><b>Why Pollinators are important?</b></i></p>
      <p style = "font-size:20px"><i>The Simple Truth: We Can’t Live Without Them!</i></p>
      <p>Without pollinators, the human race and all of earth’s terrestrial ecosystems would not survive. Of the 1,400 crop plants grown around the world, i.e., those that produce all of our food and plant-based industrial products, almost 80% require pollination by animals. </p>
    </div>
    <img src="polli.png" style="width:100%;max-width:1000px" class="w3-margin-top">
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="pollinator">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">POLLINATORS SPECIES</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Ladybug');" id="myLink">
        <div class="w3-col s4 tablink">Ladybug</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Wasp');">
        <div class="w3-col s4 tablink">Wasp</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Ant');">
        <div class="w3-col s4 tablink">Ant</div>
      </a>
    </div>

    <div id="Ladybug" class="w3-container menu w3-padding-48 w3-card">
  
      <p class="w3-text-black">Brightly colored flowers entice several animals, from hummingbirds to honeybees, to visit the plants for a nectar treat and potential pollination.</p><br>
    
      <p class="w3-text-black">Growing only 1/2 inch long, ladybugs (Hippodamia convergens) easily enter tightly constructed flowers, such as tubular flowers, to gain access to nutritious nectar.</p><br>
    
      <p class="w3-text-black">Ladybugs also eat garden pests, like aphids.</p><br>
    
      <p class="w3-text-black">Aside from protecting your favorite garden plants from aphid damage, ladybugs also pollinate flowers. As they move among flowers, they move pollen and fertilize the flowers so they can produce seeds</p>
    </div>

    <div id="Wasp" class="w3-container menu w3-padding-48 w3-card">

      <p class="w3-text-black">Wasps are very important pollinators. Wasps are insects, in the same Order, Hymenoptera, as bees and ants. Most familiar wasps belong to a group called the Aculeata.</p><br>

      <p class="w3-text-black">As well as being voracious and ecologically important predators, wasps are increasingly recognised as valuable pollinators, transferring pollen as they visit flowers to drink nectar. </p><br>
    
      <p class="w3-text-black">Wasps, like bees, have very high-energy needs that must be met for their survival. Wasps need key resources such as pollen and nectar from a variety of flowers.</p>
    
    </div>
    
    <div id="Ant" class="w3-container menu w3-padding-48 w3-card">

      <p class="w3-text-black">Ants form a great group of social insects that are great lovers of nectar.</p><br>
  
      <p class="w3-text-black">These busy insects are often observed visiting flowers to collect energy rich nectar. Ants are wingless and must crawl into each flower to reach their reward.</p><br>
    
      <p class="w3-text-black">Ants are more likely to take nectar without effectively cross-pollinating flowers.</p>
    
    </div>
    <img src="lady.png" style="width:100%;max-width:500px;margin-top:32px;">
  </div>
</div>

<!-- User Manual -->
<div class="w3-container" id="user">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">HELP</span></h5>
    <p>How to do the classification: </p>
    <p>1. Click the "START CLASSIFICATION" button in the home section.</p>
    <p>2. It will load to another page.</p>
    <p>3. Upload your desired image that you want to do the classification.</p>
    <p>4. Click the predict button.</p>
    <p>5. The image will be classified and it will show the accuracy for the image.</p>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-sand w3-padding-48 w3-large">
  <p>Developed by: <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Nurul Shuhada Zamri (197981)</a></p>
  <p>Supervised by: <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Dr. Nurul Amelina Binti Nasharuddin</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
?>