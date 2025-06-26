<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Chromatic</title>
    <meta name ="About" content="Detailed information about the game Chromatic.">
    <link rel="stylesheet" type="text/css" href="styles/site.css" >
    <link rel="stylesheet" type="text/css" href="styles/presskit.css" >
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

    <h2 class="large-font">Press Kit</h2>
    <img class = "capsule" src="images/capsule-final.png" alt = "">
    <div class="presskit-horizontal">
        <div class = "presskit-left outlined">
            <h2>Factsheet</h2>
            <div class="side-margins">
                <h3>Developer</h3>
                <ul class="presskit">
                    <li class="text">Noah Braun</li>
                    <li class="text">Location: New York City</li>
                    <li class="text"><a href="mailto:chromaticdeveloper@gmail.com">Email: <br>ChromaticDeveloper@gmail.com</a></li>
                    <li class="button"><a href="https://ncb484.wixsite.com/noah-braun" style="background-color: white; color: black;">Personal Website</a></li>
                    <li class="button"><a href="https://www.linkedin.com/in/noah-braun-890494227/" style="background-color: #0B65C2">LinkedIn</a></li>
                </ul>
                <h3>Platform</h3>
                <ul class="presskit">
                    <li class="button"><a href="https://chromaticdev.itch.io/chromatic-chapter-one" style="background-color: #FF2E4F">Itch.IO</a></li>
                </ul>
                <h3>Social Media</h3>
                <ul class="presskit">
                    <li class="button"><a href="https://x.com/chromatic_game" style="background-color: #000000">Twitter</a></li>
                    <li class="button"><a href="https://www.instagram.com/chromatic_game/" style="background-color: #FE16B5">Instagram</a></li>
                    <li class="button"><a href="TODO" style="background-color: #000000; color: #00e5ff;">Devlog</a></li>
                </ul>
                <h3>Website</h3>
                <ul class="presskit">
                    <li class="button"><a href="TODO" style="background-color: #000000; color: #00e5ff;">You're On It Right Now! TODO</a></li>
                </ul>
                <h3>Price</h3>
                <ul class="presskit">
                    <li class="text">Chromatic is free!</li>
                </ul>
            </div>
        </div>
        <div class = "presskit-right outlined">
            <div class="side-margins">
                <h2>Pitch</h2>
                <p>
                    A 2-D Platforming journey through a totally unique alien ecosystem of creatures, friends, and foes. 
                    Unlock new colored transformations to explore in new ways, learning more about yourself and the vibrant, lush world around you.
                </p>
                <h2>Description</h2>
                <p>
                    Journey into the world of Chromatic - and become a part of it. Run, jump, and fight your way through cramped caverns and across breathtaking vistas alike. As you explore, you will discover mysterious artifacts, perplexing creatures, hidden passages, and everything in between. 
                    Will the friends and foes you meet along the way guide you to the heart of the world to unearth its origin? There’s only one way to find out: unlock new abilities and powers to traverse the world in new ways, and uncover all there is to find in Chromatic. 
                    <br><br>
                    Chromatic is a 2D platformer metroidvania, where the player journeys through various multicolored worlds and unlocks a unique colored transformation in each.
                    Each transformation brings with it new ways of moving, fighting, and seeing the world around you.
                </p>
                <ul class="presskit">
                    <li>Fall into tight and refreshing <b>2D platforming and combat.</b></li>
                    <li>Find creative uses for unique and exciting <b>special abilities</b>, reaching new places and looking at old ones with fresh eyes.</li>
                    <li><b>Explore</b> lush, hand-pixeled environments.</li>
                    <li>Face <b>bizarre and mysterious</b> foes.</li>
                    <li><b>Discover</b> collectables and secrets around every corner.</li>
                    <li>Unlock upgrades and <b>customize</b> your play style with 7 transformations and over 50 equippable power-ups.</li>
                    <li>Meet <b>friends and foes</b> alike.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class = "presskit-vertical">
        <h2 class="large-font">Media</h2>
        <h2>ScreenShots</h2>
        <div class = "presskit-vertical">
            <img src="images/screenshots/chromatic-ch1-intro.gif" alt="">
            <div class = "presskit-horizontal nobg">
                <img src="images/screenshots/chromatic-ch1-bubbleatk.png" alt="">
                <img src="images/screenshots/chromatic-ch1-bubblemov.png" alt="">
            </div>
            <div class = "presskit-horizontal nobg">
                <img src="images/screenshots/chromatic-ch1-equipment.png" alt="">
                <img src="images/screenshots/chromatic-ch1-fight.png" alt="">
            </div>
            <div class = "presskit-horizontal nobg">
                <img src="images/screenshots/chromatic-ch1-foe.png" alt="">
                <img src="images/screenshots/chromatic-ch1-friend.png" alt="">
            </div>
            <div class = "presskit-horizontal nobg">
                <img src="images/screenshots/chromatic-ch1-journal.png" alt="">
                <img src="images/screenshots/chromatic-ch1-jump.png" alt="">
            </div>
            <div class = "presskit-horizontal nobg">
                <img src="images/screenshots/chromatic-ch1-mite.png" alt="">
                <img src="images/screenshots/chromatic-ch1-power.png" alt="">
            </div>
            <div class = "presskit-horizontal nobg">
                <img src="images/screenshots/chromatic-ch1-scene.png" alt="">
                <img src="images/screenshots/chromatic-ch1-secret.png" alt="">
            </div>
        </div>

        <h2>More Images/Media</h2>
        <div class = "presskit-horizontal nobg download-link">
            <a class = "downloadpresskit-1" href="https://drive.google.com/drive/folders/1KyinOsx0Df6Qa7nfkSnxHhwIKfoBmtnO?usp=sharing" target="_blank">
                <img src="images/download.gif" alt="">
            </a>
            <a class = "downloadpresskit-2" href="https://drive.google.com/drive/folders/1KyinOsx0Df6Qa7nfkSnxHhwIKfoBmtnO?usp=sharing">Download the full press kit here!</a>
        </div>
        
    </div>


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
