function getDate(isExpired, bookYear){
    var currentDT = new Date();
    var day = currentDT.getDate().toString().padStart(2, '0');
    var month = (currentDT.getMonth() + 1).toString().padStart(2, '0'); 
    var year = currentDT.getFullYear();
    var hour = currentDT.getHours().toString().padStart(2, '0');
    var minute = currentDT.getMinutes().toString().padStart(2, '0');
    var second = currentDT.getSeconds().toString().padStart(2, '0');

    if(isExpired){
        bookYear = parseInt(bookYear);
        year += bookYear;
    }

    return day + '/' + month + '/' + year + ' ' + hour + ':' + minute + ':' + second;
}

function scrollToMessage() {
    $('html, body').animate({
        scrollTop: $(".message").offset().top
    }, 'slow');
}
