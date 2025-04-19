const slides = document.querySelectorAll(".slide")
var counter = 0
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");

slides.forEach (
    (slide, index) => {
        slide.style.left = `${index * 1000}px`
    }
)

const goPrev = () => {
    counter--;
    slideImage();
}

const goNext = () => {
    counter++;
    slideImage();
}

const slideImage = () => {
    slides.forEach (
        (slide) => {
            slide.style.transform = `translateX(-${counter * 100}%)`
        }
    )
}