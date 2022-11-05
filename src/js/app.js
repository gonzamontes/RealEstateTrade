document.addEventListener('DOMContentLoaded', function() {

    eventListeners();
    darkmode();

});

function eventListeners(){
    const mobileMenu = document.querySelector('.bmenu');

    mobileMenu.addEventListener('click', responsiveNavigation);
}

function responsiveNavigation() {
    const navigation = document.querySelector('.nav');
    navigation.classList.toggle('show');
}

function darkmode() {
    const prefiereDarkMode = window.matchMedia('prefers-color-scheme: dark')
    
    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode')
    }else{
        document.body.classList.remove('dark-mode')
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode')
        }else{
            document.body.classList.remove('dark-mode')
        }
    })

    const btnDarkmode = document.querySelector('.btnDarkmode');

    btnDarkmode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    })
}