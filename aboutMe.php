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
       <div id="profileBody">
       <img src="images/profile_pic.jpg" id="profile">
       <p id="profileText">I'm an artist and creative, who's passions lie in art making and technology. A recent graduate from       
       the University of Vermont, with a dual major of studio art and computer science. I’ve been focusing on contemporary portraiture and 
       how it evolves in the digital age. My works are often a repurposing of found digital images, in the process something new arises where I connect and 
        relay my emotions throughout.
        <br>
        - SQKZ (Riley Hoff)
        <br><br>
        Contact me: <a href="mailto:rhoff@uvm.edu">rhoff@uvm.edu<a><br>
        insta : <a href="https://www.instagram.com/sqkz_/" target="_blank">@sqkz_</a></p>
</div>
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