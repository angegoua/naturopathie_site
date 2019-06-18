const nav = document.querySelector('.head__navigation-menu')



document.addEventListener('scroll', function(){
    // offset++
    if( window.pageYOffset == 260 && window.pageYOffset <5000 ){
        nav.style.opacity = 1
    }
    console.log(window.pageYOffset)
})
