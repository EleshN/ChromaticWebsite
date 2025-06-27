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

    <h2 class = "standard" >Welcome to the world of Chromatic!</h2>

    <p class="blurb standard">
        Journey into the world of Chromatic - and become a part of it. 
        Run, jump, and fight your way through cramped caverns and across breathtaking vistas alike. 
        As you explore, you will discover mysterious artifacts, perplexing creatures, hidden passages, and everything in between. 
        Will the friends and foes you meet along the way guide you to the heart of the world to unearth its origin? 
        There’s only one way to find out: unlock new abilities and powers to traverse the world in new ways, and uncover all there is to find in Chromatic. 
    </p>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-intro.gif">
        <p>
            Enter the world of <i>Chromatic!</i>
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-jump.png">
        <p>
            Fall into tight and refreshing 2D platforming and combat.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-bubbleatk.png">
        <img src = "images/screenshots/chromatic-ch1-bubblemov.png">
        <p>
            Find creative uses for unique and exciting special abilities.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-scene.png">
        <p>
            Explore lush, hand-pixeled environments.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-fight.png">
        <p>
            Face bizarre and mysterious foes.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-journal.png">
        <p>
            Catalog the creatures you find, and build your own bestiary.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-secret.png">
        <p>
            Discover collectables and secrets.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-equipment.png">
        <p>
            Unlock upgrades and customize your play style.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-friend.png">
        <p>
            Meet friends.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-foe.png">
        <p>
            Meet foes.
        </p>
    </div>

    <div class="index">
        <img src = "images/screenshots/chromatic-ch1-power.png">
        <p>
            Traverse the world in new ways.
        </p>
    </div>

    <p class = "standard">Available now for download on Mac and Windows!</p>

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
