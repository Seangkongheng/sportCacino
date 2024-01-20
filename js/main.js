

var navbar = document.getElementById("navBar");
function openMenu(){
navbar.style.right="0";
}
function closeMenu(){
    navbar.style.right="-200px";
}
// ---------------scroll bar-----------------

window.addEventListener("scroll",function(){
    var header=document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY >0 )
})

// ------------------game slide-------------------

var slides = document.querySelectorAll(".slide__image");
console.log(slides);

var countSlide = 0;

slides.forEach((slide__image, index) => {
    slide__image.style.left = `${index * 100}%`;
});

const goNext = () => {
    countSlide++;
    if (countSlide >= slides.length) {
        countSlide = 0; // Wrap around to the first slide
    }
    slideImage();
};

const goPrev = () => {
    countSlide--;
    if (countSlide < 0) {
        countSlide = slides.length - 1; // Wrap around to the last slide
    }
    slideImage();
};

const slideImage = () => {
    slides.forEach((slide__Image) => {
        slide__Image.style.transform = `translateX(-${countSlide * 100}%)`;
    });
};

