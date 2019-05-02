//SQKZ portfolio
//created by: Riley Hoff

//vertical title on scroll
function verticalTitle() {

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("sqkzTitle").className = 'verticalTitle';
    } else {
        document.getElementById("sqkzTitle").className = 'horizontalTitle';
    }
}

//full view for grid images
function fullView(el){
    document.getElementById("fullViewOverlay").style.display = 'block';
    document.getElementById("exitBtn").style.display = 'block';
    var imgFile = el.src.split("/").pop(); //get file name of image
    document.getElementById("fullViewImg").src = 'images/'+imgFile;
    document.getElementById("fullViewImg").style.display = 'block';
    document.getElementById("nextBtn").style.display = 'block';
}
function fullViewExit(){
    document.getElementById("fullViewOverlay").style.display = 'none ';
    document.getElementById("exitBtn").style.display = 'none';
    document.getElementById("fullViewImg").src = '""';
    document.getElementById("fullViewImg").style.display = 'none';
    document.getElementById("nextBtn").style.display = 'none';
}
function getNextArtwork(){
   // console.log(curArtwork);
}

//place art info
function placeArtInfo(img){
    var width = document.getElementById(img).clientWidth;
    //var width = img.naturalWidth;
    var position = width / 2;
    console.log(img,width);
    //document.getElementById(img+"Info").style.left = position+'px';
}