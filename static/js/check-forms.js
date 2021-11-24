console.log("Is working");

function checkForm(...inputs) {
    for (let input of inputs) {
        if (input.value === '') {
            return false;
        }
    }
    return true;
}

function validateForm(e){
    e.preventDefault()
    const isValid = checkForm(title, price, description, image);
    if (isValid === true) {
        form.submit()
    }
    else {
        swal("Ooops", "Llene todos los espacios", "warning");
    }
}

const form = document.getElementById('form');
const submitBtn = document.getElementById('submitBtn');
const title = document.getElementById('title');
const price = document.getElementById('price');
const description = document.getElementById('description');
const image = document.getElementById('image');

form.addEventListener('submit', e => validateForm(e))
submitBtn.addEventListener('click', e => validateForm(e))
