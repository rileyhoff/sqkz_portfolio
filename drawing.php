<?php
include 'readCsv.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SQKZ. - Drawing</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Riley Hoff">
    <meta name="description" content="SQKZ (Riley Hoff) art portfolio - Drawing">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Rozha+One" rel="stylesheet">
    <script src="script.js"></script>

    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="drawing">
<main id="swup" class="transition-swipe">
    <h1 id="sqkzTitle" class="verticalTitle">SQKZ</h1>
    <?php
    include 'nav.php';
    ?>
    <article id="bodyGrid">
        <?php
        //print each artwork and info
        foreach($artworks as $artwork){
            if(!($artwork == "")&& $artwork[4]=="d"){
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
</body>
</html>