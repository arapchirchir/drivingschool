require('./bootstrap');
// fixed navbar on scroll
window.addEventListener('scroll', function(){
    const aboveNav = this.document.getElementById('top-of-nav')
    const nav = document.getElementById('navbar');
    var navbarHeight = nav.offsetHeight;
    const body = this.document.getElementById('body');
    let topOfNav = aboveNav.offsetHeight;

    if (window.scrollY >= topOfNav) {
        nav.classList.add('fixed-top');
        body.style.marginTop = navbarHeight +"px";
    }else{
        nav.classList.remove('fixed-top');
        body.style.marginTop = 0;
    }


    var scrollBtn = document.getElementById('scrollToTop');
    if (window.scrollY > 100) {
        scrollBtn.style.display = "block";
    }
    else{
        scrollBtn.style.display = "none";
    }
});

// window.addEventListener('resize', function(event){
//     var hidden = document.getElementById('hidden');
//     var show = document.getElementById('show');
//     var newWidth = window.innerWidth;

//     if (newWidth <= 996) {
//         hidden.style.display = "block";
//         show.style.display = "none";
//         show.classList.remove('row');
//         show.classList.remove('d-flex');
//         show.classList.remove('justify-content-between');
//     }else{
//         hidden.style.display = "none";
//         show.style.display = "block";
//         show.classList.add('row');
//         show.classList.add('d-flex');
//         show.classList.add('justify-content-between');
//     }
// });

document.getElementById('scrollToTop').addEventListener('click', (event) => {
    event.preventDefault()
    document.documentElement.style.scrollBehavior = "smooth";
    document.documentElement.scrollTop = 0;
});
