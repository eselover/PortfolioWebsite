<!doctype html>

<?php require_once('couch/cms.php');?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link href="style/port.css" rel=stylesheet>
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
     <div id="headerContainer">
        <header>
            <nav>
                <a href="index.php"><img id="logo" src="<cms:editable name='logo' label='logoImage' type='image'></cms:editable>"></a>
                <span id="name">Eric Selover</span>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="portfolio.php" id="port">Portfolio</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
    
     <div id="container">
        <!-- body -->
        <div id="content">

            <div class="proj">           
                <a href="#openModal1"><img src="<cms:editable name='trivia' label='triviaImage' type='image'></cms:editable>"></a>
            </div>

            <div class="proj">           
                <a href="#openModal2"><img src="<cms:editable name='flow' label='flowimage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <a href="#openModal3"><img src="<cms:editable name='emergence' label='emergenceimage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <a href="#openModal4"><img src="<cms:editable name='music1' label='music1image' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <a href="#openModal5"><img src="<cms:editable name='music2' label='music2image' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <a href="#openModal6"><img src="<cms:editable name='breaking' label='bpimage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="clear"></div>
            
            
            <footer>
            <span id="footerContent">&copy;2015 Eric Selover </span>
            </footer>
        </div>
         
         
         <div id="openModal1" class="modal">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="imgs/triviaGame.png">
                <h2>Grand Rapids Public Museum Trivia Game</h2>
                <h3>Made in Adobe Flash CC</h3>
                <p>Created for the Grand Rapids Public Museum's Planetarium, the game runs on an Apple iPad and pulls information from a local server.  The goal of the game was to ask people questions about the Universe and collect statistics, that are uploaded to a database on the server.  These statistics are then used to show what the general public knows about the Universe, and are able to teach the public when they attend the planetarium shows.</p>
                
                <p>The client game was built in Adobe Flash CC and exported out to run on an Apple iPad, the game is managed on a local server, that compiles and sends an XML document to the game that includes all of the currently active questions.  Each question can be viewed on a webservice site, these questions then can be edited, or deleted and each will receive a new id to be added to a database, then compiled to an XML document.</p>
             </div>
         </div>
         
         <div id="openModal2" class="modal">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="imgs/flowField.png">
                <h2>2D Flowfield with cellular automata</h2>
                <h3>Made in Processing</h3>
                <p>Using perlin noise calculated a series of numbers and stored in a two-dimensional grid, directional vectors are mapped to the numbers created by the perlin noise.</p>
                <p>Autonomous Agents use the directional vectors to calculate the force to move towards, creating a flowfield.</p>
             </div>
         </div>
         
         <div id="openModal3" class="modal">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="imgs/emergence.png">
                <h2>Emergence Experiment</h2>
                <h3>Made in Processing 3D</h3>
                <p>Colonies of agents or boids spawn randomly on the screen and expand out due to the separation function so none are stacked.  The agents then fly around the screen in a target direction that changes subtly over time.  Once the agents hit the flow field they are sucked through until they can resume their flocking simulation.   Each boid stores its position and draws a trail of color.  You can use the arrow keys to add a force to all the boids to start them moving in a direction.  And you can fly through the lines created by these agents, the final goal was to make some form of artwork.  You can show the flow field with the space bar, for testing purposes but, nonetheless it is there.  The only rules that they have is once they reach the edge of the area they start back on the opposite side.</p>
             </div>
         </div>
         
         <div id="openModal4" class="modal">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="imgs/musicVis.png">
                <h2>Music Visualizer for Planetarium</h2>
                <h3>Made in Processing, using OpenGL Shaders</h3>
                <p>A music visualizer created for a "light show" at the Grand Rapids Public Museum Planetarium.  This project was a class project, the theme was the evolution of electronic music from the 70's to the 2000's.  This visualizer was made in processing and then using an OpenGL Shader added a warping effect.</p>
             </div>
         </div>
         
         <div id="openModal5" class="modal">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="imgs/MusicVis2.png">
                <h2>Music Visualizer</h2>
                <h3>Made in Processing, using OpenGL Shaders</h3>
                <p>A music visualizer that utilizes 3D objects, OpenGL Shaders, and waveform information.  This project consists of 'dancing' boxes that can be interactive or rotate in place.  The background is a simple image that is being warped by a shader over time.</p>
             </div>
         </div>
         
         <div id="openModal6" class="modal">
            <div>
                <a href="#close" title="Close" class="close">X</a>
                <img src="imgs/bullyGame.png">
                <h2>Breaking Point</h2>
                <h3>Made in Adobe Flash CC</h3>
                <p>A simple game designed to highten awareness of the horrifying effects of bullying in schools.  Created for WMCAT (West Michigan Center for Arts and Technology) this game is unwinnable, the player will dodge hurtful insults from a bully, with a school environment background. The bully shows a possible struggle at home, that finds bullying other students a way of handling it.  The player, the victim, at school has to dodge these insults but eventually all the insults are too much, and the player reaches their breaking point and commits suicide.</p>
             </div>
         </div>
        
        
    </div>


</body>
</html>

<?php COUCH::invoke(); ?>