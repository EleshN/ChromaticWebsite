<?php
$page_title = 'Home';
$nav_home_class = 'active_page';
$nav_cit_class = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name ="Home" content="A visual introduction to the world of the video game Chromatic.">
    <title>Chromatic</title>
    <link rel="stylesheet" type="text/css" href="styles/site.css" >
    <link rel="stylesheet" type="text/css" href="styles/index.css" >
    <link rel="icon" href="images/appicon_16.png">
</head>

<body onload="chooseEvent()" onresize="chooseEvent()">

    <div id="background-container">
        <div id="background-scroll">
          <div class="background-top"></div>
          <!-- Walls dynamically added here -->
          <div id="background-gradient"></div>
        </div>
    </div>

    <?php include('partials/header.php'); ?>

    <h2>Welcome to the world of Chromatic!</h2>

    <p class="blurb">
        Journey into the world of Chromatic - and become a part of it. 
        Run, jump, and fight your way through cramped caverns and across breathtaking vistas alike. 
        As you explore, you will discover mysterious artifacts, perplexing creatures, hidden passages, and everything in between. 
        Will the friends and foes you meet along the way guide you to the heart of the world to unearth its origin? 
        There’s only one way to find out: unlock new abilities and powers to traverse the world in new ways, and uncover all there is to find in Chromatic. 
    </p>

    <figure>
        <!-- Source: (original work) Noah Braun -->
        <img src="images/entrygif.gif" alt="" >
        <figcaption>Journey into alien worlds and adapt their styles to survive.</figcaption>
    </figure>
    <figure>
        <!-- Source: (original work) Noah Braun -->
        <img src="images/bossfight.gif" alt="" >
        <figcaption>Challenge great foes.</figcaption>
    </figure>
    <figure>
        <!-- Source: (original work) Noah Braun -->
        <img src="images/menugif.gif" alt="" >
        <figcaption>Customize your playstyle.</figcaption>
    </figure>
    <figure>
        <!-- Source: (original work) Noah Braun -->
        <img src="images/npcgif.gif" alt="" >
        <figcaption>Meet other travelers.</figcaption>
    </figure>
    <figure>
        <!-- Source: (original work) Noah Braun -->
        <img src="images/vista.png" alt="" >
        <figcaption>Discover tiny secrets and massive landscapes alike.</figcaption>
    </figure>

    <p>Available now for download on Mac and Windows!</p>

    <?php include('partials/footer.php'); ?>
    <?php include('partials/modal.php'); ?>
    <div id="modal"></div>

    <script src="scripts/jquery-3.7.1.js"></script>
    <script src="scripts/hamburger.js"></script>
    <script src="scripts/closebutton.js"></script>
    <script src="scripts/resizeevent.js"></script>
    <script src="scripts/socialbutton.js"></script>
    <script src="scripts/fillbackgroundwalls.js"></script>
</body>
</html>
