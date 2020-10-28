const productTypeContainer = document.querySelector('.product-type')

productTypeContainer.addEventListener('click', e => {
    // console.log(e)
    e.preventDefault

    const modal = document.querySelector('.product-modal')
    const closeButton = document.querySelector('.modal-close')

    const modalOpen = () => {
        modal.classList.add('is-open')
        modal.style.animation = 'modalIn 500ms forwards'
        document.body.style.overflowY = 'hidden'
    }
    const modalClose = () => {
        modal.classList.remove('is-open')
        modal.removeEventListener('animationend', modalClose)
    }
    
    closeButton.addEventListener('click', () => {
        modal.style.animation = 'modalOut 300ms forwards'
        modal.addEventListener('animationend', modalClose)
        document.body.style.overflowY = 'scroll'
    })
    
    // close modal with ESC key (keycode:27)
    document.addEventListener('keydown', e => {
        if (e.keyCode === 27) {
            modal.style.animation = 'modalOut 300ms forwards'
            modal.addEventListener('animationend', modalClose)
            document.body.style.overflowY = 'scroll'
        }
    })
    modalOpen()
})