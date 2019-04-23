 /*On scroll navbar change background*/
      
    var nav = document.getElementById('nav');

    window.onscroll = function(){
        if(window.pageYOffset > 100){
            nav.style.background = "#fff";
            nav.classList.remove('navbar-dark');
            nav.classList.add('navbar-light');
            
        }else{
            nav.classList.add('navbar-dark');
            nav.style.background = "transparent";
        }
    }

    