<?php
include 'readCsv.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SQKZ. - Painting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Riley Hoff">
    <meta name="description" content="SQKZ (Riley Hoff) art portfolio - Painting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Playfair+Display:700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/sqkzIcon.png">
    <script src="script.js"></script>
    <script src="swup/dist/swup.js"></script>
    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="painting">
<main id="swup" class="transition-fade">
    <h1 id="sqkzTitle" class="verticalTitle"><a href="/sqkz/portfolio_develop/index.php">SQKZ</a></h1>
    <?php
    include 'nav.php';
    ?>
    <article id="bodyGrid">
        <?php
        //print each artwork and info
        foreach($artworks as $artwork){
            if(!($artwork == "")&& $artwork[4]=="p"){
            print '<article class="art">';
            print '<img src="images/thumb/'.$artwork[0].'" alt="'.$artwork[0].'" onclick="fullView(this)">';
            print '<div class="artInfo">';
                print '<p class="title">'.$artwork[1].'</p>';
                print '<p class="medium">'.$artwork[2].'</p>';
                print '<p class="size">'.$artwork[3].'</p>';
            print '</div>';
        print '</article>';
        } 
    }
        ?>
        </article>
    <div id="fullView" >
        <img id="fullViewImg" src="">
        <div id="fullViewOverlay" onclick="fullViewExit()"></div>
        <button id="exitBtn" onclick="fullViewExit()">X</button>
    </div>
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