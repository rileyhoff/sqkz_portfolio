<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SQKZ. - About Me</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Riley Hoff">
    <meta name="description" content="SQKZ (Riley Hoff) art portfolio - About me">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Rozha+One" rel="stylesheet">
    <link rel="icon" href="images/sqkzIcon.png">
    <script src="script.js"></script>
    <script src="swup/dist/swup.js"></script>
    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="altPage">
<main id="swup" class="transition-fade">
    <h1 id="sqkzTitle" class="verticalTitle">SQKZ</h1>
    <?php
    include 'nav.php';
    ?>
    <article id="body">
       <h2>About Me</h2>
       <p>I am a 22 year old college student at the University of Vermont, Studying studio art and computer science.
        I’ve been focusing on contemporary portraiture and how it evolves in the digital age. I mainly work in Charcoal
         and Acrylics. The motivation behind the majority of my works revolve around how our generation is constantly 
         scrolling through our social media feeds at images of others, my work is a sort of repurposing of these images 
         into something new where I try to connect and relay my emotions though images.<br>
        - SQKZ (Riley Hoff)<br><br>
        Contact me: <a href="mailto:rhoff@uvm.edu">rhoff@uvm.edu<a><br>
        insta : <a href="https://www.instagram.com/sqkz_/" target="_blank">@sqkz_</a></p>
    </article>
</main>
<div class="transition-swipe overlay"></div>
<script>
        //swup page transitions
        const swup = new Swup();

        //get page title on startup
        var path = window.location.pathname;
        var page = path.split("/").pop();
        
        //get new page tile after content replaced
        document.addEventListener('swup:contentReplaced', event => {
            path = window.location.pathname;
            page = path.split("/").pop();
            console.log("Current Page:", page );
        });

        //onscroll change sqkz header to vertical text
        window.onscroll = function () {
            if(page == "index.php"){
                verticalTitle();
            }else{
                //dont change title
            }
        }; 
    </script>
</body>
</html>