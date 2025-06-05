$('#hamburger-menu').click(function() {

    /*If statement from https://stackoverflow.com/questions/9587070/if-statement-to-find-a-class-in-javascript */
    /*Classlist remove from https://www.w3schools.com/howto/howto_js_remove_class.asp */
    var menu = document.getElementById('hamburger-menu');
    var nav = document.getElementById('navmenu');

    if(menu.classList.contains('clicked')) {
        /*Turn menu off */
        nav.classList.add('hidden')
        menu.classList.add('unclicked');
        menu.classList.remove('clicked');
    }
    else {
        /*Turn menu on*/
        nav.classList.remove('hidden');
        menu.classList.add('clicked');
        menu.classList.remove('unclicked');
    }
  })
