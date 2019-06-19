const nav = document.querySelector('.head__navigation-menu')
const navText = document.querySelectorAll('.head__navigation-menu a')
const menuButton = document.querySelector('.button-menu')
let menuDisplayed = false

document.addEventListener('scroll', function(){
    // offset++
    for(let i=0; i<navText.length; i++){
        if( window.pageYOffset > 260 ){
        nav.style.backgroundColor = 'rgba(255, 255, 255, 1)'
        navText[i].style.color = 'black'
        }
        else{
        nav.style.backgroundColor = 'rgba(255, 255, 255, 0.3)'
        navText[i].style.color = 'white'
        }
    }
    
    console.log(window.pageYOffset)
})

menuButton.addEventListener('click', function() {

    if(menuDisplayed == false) {

        nav.classList.remove('head__navigation-menu--hidden')
        nav.classList.add('head__navigation-menu--displayed')
        

        menuDisplayed = true

    } else {

        
        nav.classList.remove('head__navigation-menu--displayed')
        nav.classList.add('head__navigation-menu--hidden') 

        menuDisplayed = false
    }
})