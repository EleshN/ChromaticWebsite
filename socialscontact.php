<?php
$page_title = 'SocialsContact';
$nav_home_class = 'active_page';
$nav_cit_class = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Chromatic</title>
    <meta name ="SocialsContact" content="Shows where to contact / follow Chromatic and its developer.">
    <link rel="stylesheet" type="text/css" href="styles/site.css" >
    <link rel="stylesheet" type="text/css" href="styles/socials.css" >
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

    <div class = "socials-outer">
    <h2> Please direct all official inquiries to ChromaticDeveloper@gmail.com!</h2>
    <div class = "outlined">
        <h2>Chromatic: Social Platforms</h2>
        <ul class="socials">
            <li class="button"><a href="https://chromaticdev.itch.io/chromatic-chapter-one" style="background-color: #FF2E4F" target="_blank">Chromatic: Chapter One on Itch.IO</a></li>
            <li class="button"><a href="https://chromaticdev.itch.io" style="background-color: #FF2E4F" target="_blank">@ChromaticDev on Itch.IO</a></li>
            <li class="button"><a href="https://x.com/chromatic_game" style="background-color: #000000" target="_blank">Twitter: @Chromatic_Game</a></li>
            <li class="button"><a href="https://www.instagram.com/chromatic_game/" style="background-color: #FE16B5" target="_blank">Instagram: @Chromatic_Game</a></li>
            <li class="button"><a href="TODO" style="background-color: #000000; color: #00e5ff;">Website: TODO</a></li>
            <li class="button"><a href="TODO" style="background-color: #000000; color: #00e5ff;">Devlog</a></li>
        </ul>
    </div>
    <div class = "outlined">
        <h2>Developer: Noah Braun</h2>
        <ul class="socials">
        <li class="text">Location: New York City</li>
        <li class="text"><a href="mailto:chromaticdeveloper@gmail.com">Email: ChromaticDeveloper@gmail.com</a></li>
        <li class="button"><a href="https://ncb484.wixsite.com/noah-braun" style="background-color: white; color: black;" target="_blank">Personal Website: ncb484.wixsite.com</a></li>
        <li class="button"><a href="https://www.linkedin.com/in/noah-braun-890494227/" style="background-color: #0B65C2" target="_blank">LinkedIn: Noah Braun</a></li>
        <ul>
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
