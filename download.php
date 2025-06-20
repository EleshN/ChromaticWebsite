<?php
$page_title = 'Home';
$nav_home_class = 'active_page';
$nav_cit_class = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Chromatic</title>
    <meta name ="Download" content="Presents the link to download Chromatic on an external site.">
    <link rel="stylesheet" type="text/css" href="styles/site.css" >
    <link rel="stylesheet" type="text/css" href="styles/download.css" >
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

    <p>
        <!-- Source: (original work) Noah Braun -->
        Ready to delve into the world of Chromatic? Download now for Mac and Windows!
        <a href="https://chromaticdev.itch.io/chromatic-pre-demo">Click Here To Go To The Download Page.</a>
    </p>

    <div class="download">
    <!-- Source: (original work) Noah Braun-->
    <a href="https://chromaticdev.itch.io/chromatic-pre-demo" target="_blank">
        <img src="images/download.gif" alt="Download Chromatic Demo">
      </a>
    </div>

    <p>
    Be sure to let me know what you think by <a href="reviews.html">Writing a Review!</a>
    </p>

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
