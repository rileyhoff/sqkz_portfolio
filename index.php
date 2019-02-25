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
    <script src="swup/dist/swup.js"></script>

    <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
    <main id="swup" class="transition-fade">
    <h1 id="sqkzTitle" class="horizontalTitle">SQKZ</h1>
    <?php 
    include 'nav.php'
    ?>
    <article id="bodyVertical">
        <?php
        //print each artwork and info
        foreach($artworks as $artwork){
            if(!($artwork == "")&&($artwork[4] =="s")){
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
        <p>Contact: <a href="mailto:rhoff@uvm.edu">rhoff@uvm.edu</a></p>
        <p>Author: Riley Hoff</p>
    </footer>
    </main>
    <div class="transition-swipe overlay"></div>
<script>
    //swup page transitions
    const swup = new Swup();

    var path = window.location.pathname;
    var page = path.split("/").pop();
    
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
        //do nothing
    }
    }; 
</script>
</body>
</html>