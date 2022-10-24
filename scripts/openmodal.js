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
function openModal(id){
    switchModal()
    document.querySelector('body').style.overflow = 'hidden'

    let infos = books.find(book => book.id == id)

    document.getElementById("id").value = infos.id  
    document.getElementById("titulo").value = infos.titulo
    document.getElementById("subtitulo").value = infos.subtitulo
    document.getElementById("autorNomeUm").value = infos.NomeAutor1
    document.getElementById("autorSobrenomeUm").value = infos.SobreNomeAutor1
    document.getElementById("autorNomeDois").value = infos.NomeAutor2
    document.getElementById("autorSobrenomeDois").value = infos.SobreNomeAutor2
    document.getElementById("autorNomeTres").value = infos.NomeAutor3
    document.getElementById("autorSobrenomeTres").value = infos.SobreNomeAutor3
    document.getElementById("categoria").value = infos.categoria
    document.getElementById("ano").value = infos.ano
    document.getElementById("editora").value = infos.editora
    document.getElementById("volume").value = infos.volume
    document.getElementById("isbn").value = infos.isbn
    document.getElementById("preco").value = infos.valor
}

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
