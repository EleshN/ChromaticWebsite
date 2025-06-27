<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Chromatic</title>
    <meta name ="About" content="Detailed information about the game Chromatic.">
    <link rel="stylesheet" type="text/css" href="styles/site.css" >
    <link rel="stylesheet" type="text/css" href="styles/about.css" >
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

    <h2 class = "standard" >About</h2>
    
    <div class="about">
        <img src = "images/chroma-squad-2.png">
        <p class="small-text">
            Chromatic is a 2D platformer metroidvania, where the player journeys through various multicolored worlds and unlocks a unique colored transformation in each. 
            Each transformation brings with it new ways of moving, fighting, and seeing the world around you.
            It takes after modern games such as <i>Hollow Knight</i> and <i>Ori and the Blind Forest</i>.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-intro.gif">
        <p>
            Enter the world of <i>Chromatic!</i>
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-jump.png">
        <p>
            Fall into tight and refreshing 2D platforming and combat.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-bubbleatk.png">
        <img src = "images/screenshots/chromatic-ch1-bubblemov.png">
        <p>
            Find creative uses for unique and exciting special abilities.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-scene.png">
        <p>
            Explore lush, hand-pixeled environments.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-fight.png">
        <p>
            Face bizarre and mysterious foes.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-journal.png">
        <p>
            Catalog the creatures you find, and build your own bestiary.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-secret.png">
        <p>
            Discover collectables and secrets.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-equipment.png">
        <p>
            Unlock upgrades and customize your play style.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-friend.png">
        <p>
            Meet friends.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-foe.png">
        <p>
            Meet foes.
        </p>
    </div>

    <div class="about">
        <img src = "images/screenshots/chromatic-ch1-power.png">
        <p>
            Traverse the world in new ways.
        </p>
    </div>

    <h2 class = "standard" >About the Author</h2>

    <picture class="about">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/biopic.jpg" alt = "">
    </picture>

    <div>
    <p class = "bio standard">
        <!-- Source: (original work) Noah Braun -->
        Chromatic is developed solely by Noah Braun (Age 23) using the Unity engine. Noah has been developing the game outside of work and school since 2022, with chapter one releasing in December of 2024. 
        <br>The game features music by Alex Yore and some writing by Rudy Beer.
        <br>Given that Chromatic is a side project, there is currently no planned release date for the whole game, though it is continuously being worked on fervently, and progress is only getting faster.
        <br>Noah is originally from Washington, D.C., and graduated Cornell University in May of 2024.
    </p>
    </div>

    <p class = "standard"><i>Chromatic: Chapter One</i> is available now for download on Mac and Windows!</p>

    <?php include('partials/footer.php'); ?>
    <?php include('partials/modal.php'); ?>

    <script src="scripts/jquery-3.7.1.js"></script>
    <script src="scripts/hamburger.js"></script>
    <script src="scripts/closebutton.js"></script>
    <script src="scripts/resizeevent.js"></script>
    <script src="scripts/socialbutton.js"></script>
    <script src="scripts/fillbackgroundwalls.js"></script>
</body>
</html>
