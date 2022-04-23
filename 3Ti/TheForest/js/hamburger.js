//ownload the containers of page
const bodyEl = document.querySelector('body');
const hamburgerBtn = document.querySelector('.hamburger-button');

//function for expand list of hamburger button
function expandList() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    hamburgerMenu.classList.toggle('no-display');
    hamburgerMenu.classList.toggle('filtrowanie');
}

//all work with hamburger button
hamburgerBtn.addEventListener('click', function () { 
    //download ingredients of hamburger
    const hamburgerTop = this.querySelector('#hamburger-top');
    const hamburgerMiddle = this.querySelector('#hamburger-middle');
    const hamburgerBottom = this.querySelector('#hamburger-bottom');
    
    //overlay for body
    bodyEl.classList.toggle('transparent-overlay');
    
    //add classess to hamburger
    this.classList.toggle('p-fixed');
    this.classList.toggle('to-bottom');
    this.classList.toggle('filtrowanie');
    
    //activate transforms
    hamburgerTop.classList.toggle('top-transform');
    hamburgerMiddle.classList.toggle('mid-transform');
    hamburgerBottom.classList.toggle('bottom-transform');
    
    //activate the function (expand hamburger list)
    expandList();
});



