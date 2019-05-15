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
/* jquery smooth scroll */

$('nav a').on('click',function(event){
    if(this.hash !== ''){
        event.preventDefault();
        const speed = 800;
        const hash = this.hash;

        $('html, body').animate({
            scrollTop:$(hash).offset().top
        },speed);
    }
})
    
/*Modal view project styling */
