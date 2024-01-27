// const menuToggle = document.getElementById('menuToggle');
// const sidebar = document.getElementById('sidebar');
// const closeSidebar = document.getElementById('closeSidebar');

// menuToggle.addEventListener('click', () => {
//     sidebar.classList.toggle('translate-x-0');
// });

// closeSidebar.addEventListener('click', () => {
//     sidebar.classList.toggle('translate-x-0');
// });

const menuIcon = document.getElementById("menuToggle");
const sidebar = document.getElementById("sidebar");
const closeSidebar = document.getElementById("closeSidebar");

menuIcon.addEventListener("click", () => {
    // Open the sidebar by translating it into view
    sidebar.classList.remove("-translate-x-full");
});

closeSidebar.addEventListener("click", () => {
    // Close the sidebar by translating it out of view
    sidebar.classList.add("-translate-x-full");
});