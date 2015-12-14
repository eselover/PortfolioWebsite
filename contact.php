<!doctype html>

<?php require_once('couch/cms.php');?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact</title>    
    <link href="style/contact.css" rel=stylesheet>
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
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php" id="contact">Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
    
     <div id="container">
        <!-- body -->
         
        <div id="content">
            <p>I can be reached at the following:</p>
            <p>Email:    <a id="email" href="mailto:eric.selover@gmail.com">eric.selover@gmail.com</a></p>
            <p>Phone:    (734)646-2823</p>
            
            <p>Or you can check out these profiles by clicking the link below!</p>
            
            <a class="link" href="https://www.linkedin.com/in/eric-selover-064aa7104">Linkedin</a>
            <a class="link" href="https://github.com/eselover">Github</a>
        </div>
        
        
        <footer>
            <span id="footerContent">&copy;2015 Eric Selover </span>
        </footer>
    </div>


</body>
</html>

<?php COUCH::invoke(); ?>