<?php
//open artworks csv file and put into array
$myFileName = "data/artworks";
$fileExt = ".csv";
$filename = $myFileName . $fileExt;
$file = fopen($filename, "r");

/* the variable $file will be empty or false if the file does not open */
if ($file) {
    /* Tread the first row of headers */
    $headers = fgetcsv($file);
    
    while (!feof($file)) {
        $artworks[] = fgetcsv($file);
    }
    //closes the file
    fclose($file);

} // ends if file was opened
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SQKZ.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Riley Hoff">
    <meta name="description" content="SQKZ (RIley Hoff) art portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Raleway|Rozha+One" rel="stylesheet">
    <script src="script.js"></script>

    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
    <h1 id="sqkzTitle">SQKZ</h1>
    <nav>
        <ol>
            <li><a href="index.html"> Selcected Works</a></li>
            <li>Painting</li> <!-- can sort by years if want to separate -->
            <li>Drawing</li>
            <li>About Me</li>
            <!-- Instagram -->
        </ol>   
    </nav>
    <article id="body">
        <?php
        //print each artwork and info
        foreach($artworks as $artwork){
            if(!($artwork == "")){
            print '<article class="art">';
            print '<img src="images/'.$artwork[0].'" alt="'.$artwork[0].'">';
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
    <footer>
        <div class="vl"></div>
        <a href="https://www.instagram.com/sqkz_/" target="_blank">
        <img src="images/instaIcon.png" alt="instagram" id="insta">
        </a>
    </footer>
</body>
<script>
    //onscroll change sqkz header to vertical text
    window.onscroll = function () {
        verticalTitle()
    };
    var title = document.getElementById("sqkzTitle");
    var endOfDocumentTop = 100;
    var size = 0;
 
</script>
</html>