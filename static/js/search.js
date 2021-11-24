function stringSimilarity(string1, string2) {
    let similarity = 0;
    string1 = string1.trim()
    string2 = string2.trim()
    string1 = Array.from(string1)
    string2 = Array.from(string2);
    for (let i = 0; i < string1.length; i++) {
        if (string1[i] === string2[i]) {
            similarity++;
        }
    }
    return similarity;
}
function searchProduct(query) {
    const productsTitle = document.getElementsByClassName('product-info');

    changeAllProductsClass('d-none', '');
    for (let title of productsTitle) {
        let titleText = title.innerText;
        if (stringSimilarity(query.toLowerCase(), titleText.toLowerCase()) >= query.length) {
            title.parentNode.classList.remove('d-none')
        }
        else if (query === '') {
            changeAllProductsClass('d-none', 'd-none');
        }
    }
    return false;
}

function changeAllProductsClass(style, option) {
    const productsTitle = document.getElementsByClassName('product-info');
    for (let products of productsTitle) {
        if (option === '') {
            products.parentNode.classList.add(style)
        }
        else {
            products.parentNode.classList.remove(style)
        }
    }
}


const searchInput = document.getElementById("searchInput");
const searchButton = document.getElementById("searchButton");
searchInput.addEventListener('keyup', () => {
    let search = searchInput.value;
    searchProduct(search)
})

