
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {x.className += " responsive";}
    else {x.className = "topnav";}
}
function searchModalBox() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
function registerModal() {
    document.getElementById("register_box").style.display = "block";
}
function closeRegister() {
    document.getElementById("register_box").style.display = "none";
}
function registerOnSite(){

}
function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function Validate(){
    var username = document.forms['reg']['username'];
    var password = document.forms['reg']['newPasword'];
    var pasconf = document.forms['reg']['confPassw'];
    if(username.length<3){
        postMessage("username is not long enough");
    }
    if(password.length <4){
        postMessage("password is not long enough");
    }
    if(password.localeCompare(pasconf) != 0){
        postMessage("password wasn't confirmed");
    }
    else{
        return true;
    }
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-50px";
    }
}

function likepressed(){

}