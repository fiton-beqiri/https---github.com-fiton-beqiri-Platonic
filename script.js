const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => ){
    if(password.value.length <=6){
        messages.push('Fjalekalimi duhet te jete me i gjate se 6 karaktere!')
    }

    if(password.value.length >=20){
        messages.push('Fjalekalimi duhet te jete me i shkurter se 20 karaktere!')
    }
}

if(messages.length > 0){
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
}


})