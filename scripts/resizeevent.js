function chooseEvent(){
    var menu = document.getElementById('hamburger-menu');
    var nav = document.getElementById('navmenu');
    if(window.innerWidth > 710 && !menu.classList.contains("hidden")){
        console.log("screen getting bigger")
        nav.classList.remove('hidden')
        menu.classList.add('unclicked');
        menu.classList.remove('clicked');
        menu.classList.add('hidden');
    }
    else if(window.innerWidth < 710 && menu.classList.contains("hidden")){
        console.log("screen getting smaller")
        menu.classList.remove('hidden');
        nav.classList.add('hidden');
    }
}
/*With guidance from: https://www.w3schools.com/jsref/event_onresize.asp*/
