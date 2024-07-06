const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')
/*=============== SHOW MENU ===============*/
/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}
/*=============== SHOW MENU ===============*/


/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


/*=============== REMOVE MENU MOBILE ===============*/


/*=============== ADD BLUR TO HEADER ===============*/

const blurHeader = () => {
    const header = document.getElementById('header');
    // When the scroll is greater than 50 viewport height, add the blur-header class to the header tag
    window.scrollY >= 50 ? header.classList.add('blur-header') 
                         : header.classList.remove('blur-header');
}
window.addEventListener('scroll', blurHeader);


/*=============== EMAIL JS ===============*/
// const contactForm = document.getElementById('contact-form'),
//         contactMessage = document.getElementById('contact-message')

// const sendEmail = (e) => {
//     e.preventDefault()

//     // serviceID - templateID - #form - publicKey
//     emailjs.sendForm('service_zgi0eji', 'template_qwbibha', '#contact-form', '7L4bzLhGTsUr98GWG')
//     .then(() => {
//     //  Show sent message
//     contactMessage.textContent = 'Message Sent Successfully.'

//     // Remove message after 5 seconds
//     setTimeout(() => {
//         contactMessage.textContent = ''
//     }, 5000) 

//     // Clear input fields
//     contactForm.reset()

// }, () => {
//         // Show error meassage
//         contactMessage.textContent = 'Message not sent (service error)'
//     })

// }

// contactForm.addEventListener('submit', sendEmail)

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const contactMessage = document.getElementById('contact-message');

    const sendEmail = (e) => {
        e.preventDefault();

        // serviceID - templateID - #form - publicKey
    emailjs.sendForm('service_zgi0eji', 'template_qwbibha', '#contact-form', '7L4bzLhGTsUr98GWG')
    .then(() => {
    //  Show sent message
    contactMessage.textContent = 'Message Sent Successfully.'

    // Remove message after 5 seconds
    setTimeout(() => {
        contactMessage.textContent = ''
    }, 5000) 

    // Clear input fields
    contactForm.reset()

}, () => {
        // Show error meassage
        contactMessage.textContent = 'Message not sent (service error)'
    })
    };

    contactForm.addEventListener('submit', sendEmail);
});




/*=============== EMAIL JS ===============*/
const sprayForm = document.getElementById('spray-form'),
        sprayServiceMessage = document.getElementById('spray-message')

const sendSprayMessageEmail = (e) => {
    e.preventDefault()

    // serviceID - templateID - #form - publicKey
    emailjs.sendForm('service_wrmr4nc', 'template_51gazx6', '#spray-form', '7L4bzLhGTsUr98GWG')
    .then(() => {
    //  Show sent message
    sprayServiceMessage.textContent = 'Message Sent Successfully.'

    // Remove message after 5 seconds
    setTimeout(() => {
        sprayMessage.textContent = ''
    }, 5000) 

    // Clear input fields
    sprayForm.reset()

}, () => {
        // Show error meassage
        sprayMessage.textContent = 'Message not sent (service error)'
    })

}

sprayForm.addEventListener('submit', sendSprayMessageEmail)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/


/*=============== SCROLL REVEAL ANIMATION ===============*/
