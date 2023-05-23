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