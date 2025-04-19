var counter = 0;
const slides = document.querySelectorAll(".slide");
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");

btn1.addEventListener("click", goPrev);
btn2.addEventListener("click", goNext);

slides.forEach((slide, index) => {
    slide.style.transform = `${index * 1000}px`;
});

function goPrev() {
    if (counter < 0) {
        counter = slides.length - 1;
    } else {
        counter--;
    }
    slides[counter].style.transform = `translateX(-${counter * 1000}px)`;
}

function goNext() {
    if (counter >= slides.length) {
        counter = 0;
    } else {
        counter++;
    }
    slides[counter].style.transform = `translateX(-${counter * 1000}px)`;
}
