const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalBunttons = document.querySelectorAll('[data-close-button]')
const overlay = document = document.getElementById('overlay')

openModalButtons.forEach(button => {
     button.addEventListener('click', () => {
          const modal = document.querySelector(button.dataset.modalTarget)
          openModal(modal)
     })
})

 overlay.addEventListener('click', () => {
     const modals = document.querySelectorAll('.modal__container.active')
     modals.forEach(modal => {
          closeModal(modal)
     })
 })

closeModalBunttons.forEach(button => {
     button.addEventListener('click', () => {
          const modal = button.closest('.close-button')
          closeModal(modal)
     })
})

function openModal(modal) {
     if (modal == null) return
     modal.classList.add('active')
     overlay.classList.add('active')
}

function closeModal(modal) {
     if (modal == null) return
     modal.classList.remove('active')
     overlay.classList.remove('active')
}


// const showModal = (openButton, modalContent) => {
//         const openBtn = document.getElementById(openButton),
//         modalContainer = document.getElementById(modalContent)

//         if (openBtn && modalContainer) {
//                 openBtn.addEventListener('click', () => {
//                         modalContainer.classList.add('active')
//                 })
//         }
// }

// showModal('open-modal','modal-container')