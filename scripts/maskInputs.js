const isbn = document.querySelector('#isbn')
const isbnPattern = {
    mask: '0000000000000'
}
const isbnMasked = IMask(isbn, isbnPattern)

const ano = document.querySelector('#ano')
const anoPattern = {
    mask: 'AAAA',
    blocks: {
        AAAA: {
            mask: IMask.MaskedRange,
            from: '1',
            to: String(new Date().getFullYear()),
        },
    }
}
const anoMasked = IMask(ano, anoPattern)

const volume = document.querySelector('#volume')
const volumePattern = {
    mask: '00'
}
const volumeMasked = IMask(volume, volumePattern)


const preco = document.querySelector('#preco')
const precoPattern = {
    mask: Number,
    radix: '.', 
    mapToRadix: [','],
}
const precoMasked = IMask(preco, precoPattern)

