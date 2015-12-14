<!doctype html>

<?php require_once('couch/cms.php');?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eric Selover</title>
    <link href="style/main.css" rel=stylesheet>
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <div id="headerContainer">
        <header>
            <nav>
                <a href="index.php"><img id="logo" src="<cms:editable name='logo' label='logoImage' type='image'></cms:editable>"></a>
                <span id="name">Eric Selover</span>
                <ul>
                    <li><a href="index.php" id="home">Home</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
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
                <div id="desc">
                    <h3>GRPM Trivia Game</h3>
                    <p>Platform: Apple IPad</p>
                    <p>ActionScript 3.0, XML</p>
                </div>
                <a href="portfolio.php#openModal1"><img src="<cms:editable name='trivia' label='triviaImage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <div id="desc">
                    <h3>2D Flowfield</h3>
                    <p>Processing</p>
                </div>                
                <a href="portfolio.php#openModal2"><img src="<cms:editable name='flow' label='flowimage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <div id="desc">
                    <h3>Emergence</h3>
                    <p>Processing 3D</p>
                </div>
                <a href="portfolio.php#openModal3"><img src="<cms:editable name='emergence' label='emergenceimage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <div id="desc">
                    <h3>Junior Project Music Visualizer</h3>
                    <p>Client: GRPM Planetarium</p>
                    <p>Processing, OpenGL Shaders</p>
                </div>
                <a href="portfolio.php#openModal4"><img src="<cms:editable name='music1' label='music1image' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <div id="desc">
                    <h3>Music Visualizer</h3>
                    <p>Processing 3D, OpenGL Shaders</p>
                </div>
                <a href="portfolio.php#openModal5"><img src="<cms:editable name='music2' label='music2image' type='image'></cms:editable>"></a>
            </div>
            
            <div class="proj">
                <div id="desc">
                    <h3>Breaking Point</h3>
                    <p>Platform: PC</p>
                    <p>ActionScript 3.0</p>
                </div>
                <a href="portfolio.php#openModal6"><img src="<cms:editable name='breaking' label='bpimage' type='image'></cms:editable>"></a>
            </div>
            
            <div class="clear"></div>
            
        </div>
        
        <footer>
            <span id="footerContent">&copy;2015 Eric Selover </span>
        </footer>
    </div>

</body>
</html>
    
<?php COUCH::invoke(); ?>