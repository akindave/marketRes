document.addEventListener("DOMContentLoaded", function () {
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("translate-x-0");
    sidebarBackdrop.classList.toggle("hidden");
  }

  function closeSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.remove("translate-x-0");
    sidebarBackdrop.classList.add("hidden");
  }

  function closeSidebarOnClickOutside(event) {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    if (
      //!sidebar.contains(event.target) &&
      //event.target !== sidebarToggle
      event.target === sidebarBackdrop
    ) {
      //sidebar.classList.remove("-translate-x-full");
      sidebar.classList.remove("translate-x-0");
      sidebarBackdrop.classList.add("hidden");
    }
  }
  document
    .getElementById("sidebarToggle")
    .addEventListener("click", toggleSidebar);
  document
    .getElementById("closeSidebar")
    .addEventListener("click", closeSidebar);
  document.addEventListener("click", closeSidebarOnClickOutside);
});
