const openModalButtons = document.querySelectorAll('.open-modal'),
      modals = document.querySelectorAll('.modal'),
      closeModalButtons = document.querySelectorAll('.close-modal');

openModalButtons.forEach(openBtn => {
  openBtn.addEventListener('click', openModal)
});

closeModalButtons.forEach(closeBtn => {
  closeBtn.addEventListener('click', closeModal)
});

function openModal() {
  modals.forEach(modal => {
    modal.classList.add('visible');
  })

}

function closeModal() {
  modals.forEach(modal => {
    modal.classList.remove('visible');    
  })

}
