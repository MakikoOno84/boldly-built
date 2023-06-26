const openModalButtons = document.querySelectorAll('.open-modal');
const modals = document.querySelectorAll('.modal');
const closeModalButtons = document.querySelectorAll('.close-modal');
const menuToggle = document.getElementById('menu-button');

openModalButtons.forEach(openBtn => {
  openBtn.addEventListener('click', openModal);
});

closeModalButtons.forEach(closeBtn => {
  closeBtn.addEventListener('click', closeModal);
});

function openModal() {
  modals.forEach(modal => {
    modal.classList.add('visible');
    // toggle menu button for hamburger menu and close button for contact form overlap when it's mobile. In order to address this, add background class(pointer-event:none, which inactivate an event) to toggle menu button when contact form opens. 
    menuToggle.classList.add('background');
  })

}

function closeModal() {
  modals.forEach(modal => {
    modal.classList.remove('visible');  
    menuToggle.classList.remove('background');  
  })

}
