const grid = document.querySelector('.showcase-wrapper');
const gridItems = document.querySelectorAll('.showcase-item');
let scrollInterval;

// Duplicate grid items to create the illusion of infinite scrolling
grid.innerHTML += grid.innerHTML;

function startAutoScroll() {
    scrollInterval = setInterval(() => {
        grid.scrollLeft += 3; 
        if (grid.scrollLeft >= grid.scrollWidth / 2) {
            grid.scrollLeft = 0;
        }
    }, 30);
}

function stopAutoScroll() {
    clearInterval(scrollInterval);
}

// Pause auto-scroll on hover
grid.addEventListener('mouseenter', () => {
    console.log('Mouse enter')
    stopAutoScroll();
});

grid.addEventListener('mouseleave', () => {
    startAutoScroll();
});

startAutoScroll();
