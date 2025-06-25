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

    <h2>Press Kit</h2>
    <div class="presskit">
        <div class = "presskit-left">
            <h2>Factsheet</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            <h3>Developer</h3>
            <h3>Platform</h3>
            <h3>Social Media</h3>
            <h3>Website</h3>
            <h3>Price</h3>
        </div>
        <div class = "presskit-right">
            
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
