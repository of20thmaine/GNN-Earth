/**
* Bobby Palmer, CSC-465, App Global JS
*/


/**
* This section of code pertains to the display of modals for registration and
* login as well as the display of the sidebar on mobile screens.
*/
var loginModal = document.getElementById("login-user");
var loginBtn = document.getElementById("register-login");
var closeSpans = document.getElementsByClassName("close");
var registerModal = document.getElementById("register-user");
var registerBtn = document.getElementById("modal-register");
var menuButton = document.getElementById("open-side");
var sideMenu = document.getElementById("sidebar");
var sideMenuBlinds = document.getElementById("sidebar-blinds");

loginBtn.onclick = function() {
    loginModal.style.display = "block";
}

for (var i = 0; i < closeSpans.length; ++i) {
    closeSpans[i].onclick = function() {
        loginModal.style.display = "none";
        registerModal.style.display = "none";
    };
}

window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    } else if (event.target == registerModal) {
        registerModal.style.display = "none";
    } else if (event.target == sideMenuBlinds && event.target != sideMenu) {
        sideMenuBlinds.style.display = "none";
    }
}

registerBtn.onclick = function() {
    loginModal.style.display = "none";
    registerModal.style.display = "block";
}

menuButton.onclick = function() {
    sideMenuBlinds.style.display = "block";
}

/**
* Following javascript handles menu click events and submenu display.
*/

var menuItems = document.getElementsByClassName("sb-item");

/**
* Function utilizes the "closure" method of preserving references
* to utilized variables in outer function while passing the
* responsibilities of the event handler to an inner function.
* HOW-TO (Very Cool):
* http://www.howtocreate.co.uk/referencedvariables.html#scope
*/
var subMenuDisplay = function(id) {
    var clicked = false;
    return function() {
        var focusArrow = document.getElementById(id + "fa");
        var subMenu = document.getElementById(id + "sm");
        var selected = "&#9660;";
        var unselected = "&#9654;";
        clicked = !clicked;

        if (clicked) {
            focusArrow.innerHTML = selected;
            subMenu.style.display = "block";
        } else {
            focusArrow.innerHTML = unselected;
            subMenu.style.display = "none";
        }
    };
};

for (var i = 0; i < menuItems.length; ++i) {
    menuItems[i].addEventListener('click', subMenuDisplay(menuItems[i].id), false);
}











//
