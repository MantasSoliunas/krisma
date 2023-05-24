function scrollToElement() {
    var targetElement = document.getElementById('targetElement');
    targetElement.scrollIntoView({ behavior: 'smooth' });
  }

function myFunction() {
    var x = document.getElementById('mMenu');
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

var images = ['img/hero-drone2.png', 'img/hero-drone3.png', 'img/hero-tir.png', 'img/hero-drone1.png'];
var currentIndex = 0;

function changeBackgroundImage() {
    var hero = document.getElementById('hero');
    hero.style.backgroundImage = 'url(' + images[currentIndex] + ')';
    currentIndex = (currentIndex + 1) % images.length;
} 

setInterval(changeBackgroundImage, 3500);