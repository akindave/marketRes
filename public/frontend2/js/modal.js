function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.opacity = "1";
    modal.style.pointerEvents = "auto";
    modal.querySelector(".transform").style.transform = "translateY(0)";
  }
  
  function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.opacity = "0";
    modal.style.pointerEvents = "none";
    modal.querySelector(".transform").style.transform = "translateY(-100%)";
  }
  
  // Attach click event listeners to all modal trigger buttons
  const modalTriggerButtons = document.querySelectorAll(".modal-trigger");
  modalTriggerButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
      const modalId = event.target.getAttribute("data-modal-target");
      openModal(modalId);
    });
  });
  
  // Attach click event listeners to all modal close buttons
  const modalCloseButtons = document.querySelectorAll(".modal-close");
  modalCloseButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
      const modalId = event.target.closest(".modal").id;
      closeModal(modalId);
    });
  });
  