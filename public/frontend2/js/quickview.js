const slider = document.getElementById('quickview-slider');
const imageIndicators = document.querySelectorAll('.q-indicator');
let iActiveIndex = 0;

function goToSlide(index) {
    const translateX = -index * 100;
    slider.style.transform = `translateX(${translateX}%)`;
    iActiveIndex = index;

    // Update indicator styles
    imageIndicators.forEach((indicator, i) => {
        if (i === index) {
            // indicator.classList.remove('');
            // indicator.classList.add('');
        } else {
            // indicator.classList.remove('');
            // indicator.classList.add('');
        }
    });
}

// Initial load, set the first slide as active
goToSlide(iActiveIndex);