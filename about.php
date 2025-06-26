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

    <h2>About</h2>
    <div class="about">
    <figure class = "right">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/title.png" alt="" >
    </figure>
    <p class = "left standard">
        <!-- Source: (original work) Noah Braun -->
        Chromatic is a platformer where you can explore the vast world of the game in any order you want. It takes after games like Hollow Knight and Ori and the Blind Forest, guiding the player's abilities as their set of available powers continuously grows.</p>
    </div>

    <div class="about">
    <figure class = "left">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/chroma-squad.png" alt="" >
        <figcaption></figcaption>
    </figure>
    <p class = "right standard">
        <!-- Source: (original work) Noah Braun -->
        You adapt to the world as it changes around you, gaining new abilities. Pictured is each ability players can expect to see in game. Each transformation carries with it a new movement ability and a new attack, and can be found in a corresponding environment. Each transformation sees the player character adapting to the environment, gaining an appearance and abilities influenced by that environment's ecosystem and biology.
    </p>
    </div>

    <div class="about">
    <p class = "standard">
        <!-- Source: (original work) Noah Braun -->
        The player can use these special powers using their light blue color. This color is obtained in the coral-like first area.
    </p>

        <div class="about">
        <figure  class = "right">
            <!-- Source: (original work) Noah Braun -->
            <img src="images/bubble.png" alt="" >
        </figure>
        <p class = "left standard">
            <!-- Source: (original work) Noah Braun -->
            Shoot magical bubbles. These bubbles can damage enemies and even pick up small enemies and collectables. Be careful, though: bubbles will pop if they collide with anything that is not small enough to pick up!  </p>
        </div>

        <div class="about">
        <figure class = "left">
            <!-- Source: (original work) Noah Braun -->
            <img src="images/float.png" alt="" >
        </figure>
        <p class = "right standard">
            <!-- Source: (original work) Noah Braun -->
            Float through the air. The player can blow a bubble in their head to float straight up from the ground. Upon finding ways to improve this power, it will later be possible for the player to move directionally while floating, allowing for increased movement capabilities.</p>
        </div>
    </div>

    <div class="about">
    <figure  class = "right">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/plants.png" alt="" >
    </figure>
    <p class = "left standard">
        <!-- Source: (original work) Noah Braun -->
        Engage with the flora and fauna native to each environment. Here, you can see an aquatic creature native to the first area among the environment's local vegetation. Each environment has its own ecosystem and even it's own implementation of the evolutionary forces that flow through the entire world. In the first area, circular shapes and soft ground are more likely to grow.</p>
    </div>

    <div class="about">
    <figure  class = "left">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/augs.png" alt="" >
    </figure>
    <p class = "right standard">
        <!-- Source: (original work) Noah Braun -->
        Customize your playsyle with over 50 equippable augmentations. Each augmentation can be attached to a part of your body, granting that body part special abilities. This means that, combined with the 8 different transformations the player can take, the player's body can take thousands of different forms! Which one will you choose?
    </p>
    </div>

    <div class="about">
    <figure  class = "right">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/npc.png" alt="" >
    </figure>
    <p class = "left standard">
        <!-- Source: (original work) Noah Braun -->
        Speak with other inhabitants of the world, whether they be natives or travelers like yourself. Friends, enemies, and everything in between await your company. Other beings will have all sorts of utility to the player. Whether they be amicable and give the player benefits, or antagonistic foes that challenge the player and give them valuable survival skills and experience, or empty vagabonds that give nothing but information of their existence. Nobody is quite sure where the world of chromatic came from or how it is developing, but everyone is interested in their own unique desires. </p>
    </div>

    <div class="about">
    <figure  class = "left">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/map.png" alt="" >
    </figure>
    <p class = "right standard">
        <!-- Source: (original work) Noah Braun -->
        Open up the world as you explore. With over seven unique biomes to explore, everyone will find something exciting, mysterious, or breathtaking to find in chromatic. The task of looking for these items, people, vistas, and moments will drive you through the world to forge your own meaning and experience.</p>
    </div>

    <h2>About the Author</h2>

    <picture class="about">
        <!-- Source: (original work) Noah Braun -->
        <img src="images/biopic.jpg" alt = "">
    </picture>

    <div class="about">
    <p class = "bio standard">
        <!-- Source: (original work) Noah Braun -->
        Chromatic is developed solely by Noah Braun using the Unity engine. Noah has been developing the game outside of work and school since 2022, with chapter one releasing in December of 2024. 
        <br>The game features music by Alex Yore and some writing by Rudy Beer.
        <br>Seeing that Chromatic is a side project, there is currently no planned release date for the whole game, though it is continuously being worked on fervently, and progress is only getting faster.
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
