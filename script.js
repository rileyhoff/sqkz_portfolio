//SQKZ portfolio
//created by: Riley Hoff

//vertical title on scroll
function verticalTitle() {
    var scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

    if (size == 0 && scroll > endOfDocumentTop) {
        title.className = 'verticalTitle';
        size = 1;
    } else if (size == 1 && scroll <= endOfDocumentTop) {
        title.className = 'horizontalTitle';
        size = 0;
    }
}