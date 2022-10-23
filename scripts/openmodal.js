const switchModal = () => {
    const modal = document.querySelector('.modal')
    const actualStyle = modal.style.display
    if(actualStyle == 'flex') {
        modal.style.display = 'none'
    } else {
        modal.style.display = 'flex'
        modal.style.justifyContent = 'center'
        modal.style.alignItems = 'center'
    }
}
  
const btn = document.querySelector('.modal-button')
btn.addEventListener('click', () => {
    switchModal()
    document.querySelector('body').style.overflow = 'hidden'
})

const closeButtonFormCard = document.querySelector('#close-button-form-card')
closeButtonFormCard.addEventListener('click', () => {
    switchModal()
    document.querySelector('body').style.overflow = 'auto'
})

window.onclick = function(event) {
    const modal = document.querySelector('.modal')
    if (event.target == modal) {
        switchModal()
        document.querySelector('body').style.overflow = 'auto'
    }
}
