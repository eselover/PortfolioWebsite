<!doctype html>

<?php require_once('couch/cms.php');?>
<html>
<head>
    <meta charset="UTF-8">
    <title>About</title>    
    <link href="style/about.css" rel=stylesheet>
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
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="about.php" id="about">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
    
     <div id="container">
        <!-- body -->
         
         <div id="content">
                 <div class="pic"><img src="<cms:editable name='profile' label='profImage' type='image'></cms:editable>"></div>
             
                 <div class="desc">
                 <p>Hello!  My Name is Eric Selover, I am a game design developer, I graduate from Ferris State University in May of 2016.  I moved from Manchester, Michigan to Grand Rapids, Michigan in 2013 to attend Ferris.  I started college straight out of high school in 2011 and first attended Lawrence Technological University in Southfield, MI.</p> 
                 
                 <p>I have been programming for five years now, the majority of the projects I have done, have been projects for school.  The <a href="portfolio.php#openModal1">Trivia Game</a> I had built while interning at Grand Rapids Public Museum you can check out the details by clicking the link.</p>
                 
                 <p>I enjoy playing games as much as designing them, the most entertaining games to play and create, are RPG's. A game that has a well developed storyline that allows the player to be pulled and wanting to know what the next segment of story is.  Check out some of my work, or contact me!</p>
             </div>
             <ul>
                 <li><a href="https://www.linkedin.com/in/eric-selover-064aa7104">Linkedin</a></li>
                 <li><a href="https://github.com/eselover">Github</a></li>
                 <li><a href="<cms:editable name='resume' label='download' type='file'></cms:editable>" download="EricSelover_Resume.pdf">Resume</a></li>
                 <li><a href="contact.php">Contact</a></li>
             </ul>
         </div>
        
        
        <footer>
            <span id="footerContent">&copy;2015 Eric Selover </span>
        </footer>
    </div>


</body>
</html>

<?php COUCH::invoke(); ?>