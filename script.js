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
