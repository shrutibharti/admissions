var tablinks = document.getElementsByClassName('tab-links');
var tabcontents = document.getElementsByClassName('tab-contents');

function display(tabname) {
    for (tablink of tablinks) {
        tablink.classList.remove("active-link");
    }
    for (tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

var navlinks = document.getElementsByClassName('nav-links');
var navcontents = document.getElementsByClassName('nav-contents');

function displaynav(navname) {
    for (navlink of navlinks) {
        navlink.classList.remove("active-nav-link");
    }
    for (navcontent of navcontents) {
        navcontent.classList.remove("active-nav-tab");
    }
    event.currentTarget.classList.add("active-nav-link");
    document.getElementById(navname).classList.add("active-nav-tab");
}