//For Headline news
const listItems = document.querySelectorAll('#headline li');
let currentIndex = 0;

function animateListItem() {
   // Hide all items
   listItems.forEach(item => {
    item.style.opacity = '0';
    item.style.transform = 'translateY(20px)';
   });

    // Show the current item
    listItems[currentIndex].style.opacity = '1';
    listItems[currentIndex].style.transform = 'translateY(0)';

    currentIndex = (currentIndex + 1) % listItems.length;

    setTimeout(animateListItem, 2000);
}

animateListItem()