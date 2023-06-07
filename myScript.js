const greeting = document.getElementById("demo");

var date = new Date();
var hour = date.getHours();

function mygreet(text, e) {
    for (let x = 0; x < text.length; x++) {
        var aa = setTimeout(() => {  
            e.textContent += text.charAt(x);
        }, x * 50);
    }

}
 var z = " Welcome to my portifolio";

if (hour < 12) {
    mygreet("Good Morning,"+""+z,greeting);
}
else if (hour < 4) {
    mygreet("Good Afternoon,"+""+z,greeting);
}
else if (hour >= 4) {
    mygreet("Good Evening,"+""+z,greeting);
}




let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}


