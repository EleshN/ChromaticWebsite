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

    <div class = "about horizontal">
        <img src = "images/voidmite_idle.gif" alt = "">
        <p>
            <span class="bigger-paragraph"><b>Chromatic: Chapter One is out now!</b></span>
            <br>The full game of Chromatic has no planned release date. 
            This is because it is currently being worked on part-time, and is still in the relatively early stages of development.
            There are some future updates / demos planned beyond chapter one, but seeing as Chromatic is a non-linear game where many challenges can be attempted in branching order, it will not be releasing chapter-by-chapter.
            <br><br>
            To stay updated with Chromatic's development, follow the game's <a href = "socialscontact.php">social media profiles here!</a>
            <br>For more detailed information about Chromatic, take a look at our <a href = "presskit.php">press kit</a>.
        </p>
        <!-- follow the devlog <a href = "TODO" target="_blank">here</a> or -->
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
        <br>Noah is originally from Washington, D.C., and graduated Cornell University in May of 2024.
        <br>Chromatic features music by Alex Yore and some writing by Rudy Beer, both of whom Noah met at Cornell.
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
