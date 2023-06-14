// BUTTON SCROLL

function scrollToElement() {
    var targetElement = document.getElementById('targetElement');
    targetElement.scrollIntoView({ behavior: 'smooth' });
  }

// MOBILE NAV 

function myFunction() {
    var x = document.getElementById('mMenu');
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

// HERO BACKGROUND CHANGE

var images = ['../../app/img/hero-drone2.png', '../../app/img/hero-drone3.png', '../../app/img/hero-tir.png', '../../app/img/hero-drone1.png'];
var currentIndex = 0;

function changeBackgroundImage() {
    var hero = document.getElementById('hero');
    hero.style.backgroundImage = 'url(' + images[currentIndex] + ')';
    currentIndex = (currentIndex + 1) % images.length;
} 

setInterval(changeBackgroundImage, 3000);

// SUBMIT FORM 

// function submitForm(event) {
//     event.preventDefault();
  
//     var form = document.getElementById('myForm');
//     form.style.display = 'none';
  
//     var submittedText = document.getElementById('submittedText');
//     submittedText.style.display = 'block';
//   }