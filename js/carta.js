function setPosition(check, div, p1, p2, p3, p4, p5, p6, p7, p8) {
    if (check === '#box1') {
        $(div).scrollTo(p1, 800);
    }
    else if (check === '#box2') {
        $(div).scrollTo(p2, 800);
    }
    else if (check === '#box3') {
        $(div).scrollTo(p3, 800);
    }
    else if (check === '#box4') {
        $(div).scrollTo(p4, 800);
    }
    else if (check === '#box5') {
        $(div).scrollTo(p5, 800);
    }
    else if (check === '#box6') {
        $(div).scrollTo(p6, 800);
    }
    else if (check === '#box7') {
        $(div).scrollTo(p7, 800);
    }
    else {
        $(div).scrollTo(p8, 800);
    }
};