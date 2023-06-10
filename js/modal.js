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
  console.log("openModal function is called!");
  console.log(modals);
  modals.forEach(modal => {
    modal.classList.add('visible');
  })

}

function closeModal() {
  console.log("closeModal function is called!");
  modals.forEach(modal => {
    modal.classList.remove('visible');    
  })

}
