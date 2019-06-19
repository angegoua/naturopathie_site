const nav = document.querySelector('.head__navigation-menu')
const menuButton = document.querySelector('.button-menu')
let menuDisplayed = false

document.addEventListener('scroll', function(){
    // offset++
    if( window.pageYOffset == 260 && window.pageYOffset <5000 ){
        nav.style.opacity = 1
    }
    console.log(window.pageYOffset)
})

document.addEventListener('click', function() {

    if(menuDisplayed == false) {

        nav.classList.add('head__navigation-menu--displayed')

        menuDisplayed = true

    } else {

        nav.classList.remove('head__navigation-menu--displayed') 

        nav.classList.add('head__navigation-menu--hidden') 

        menuDisplayed = false
    }
})