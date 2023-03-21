const name = document.querySelector('#inputName')
const surrName = document.querySelector('#inputsurname')
const mail = document.querySelector('#inputEmail4')
const city = document.querySelector('#inputCity')
const address = document.querySelector('#inputAddress')
const address2 = document.querySelector('#inputAddress2')
const error = document.querySelector('.error')
const btn = document.querySelector('.send-btn')

const checkForm = () => {
	if (
		name.value !== '' &&
		surrName.value !== '' &&
		mail.value !== '' &&
		city.value !== '' &&
		address.value !== '' &&
		address2.value !== ''
	) {
		error.style.visibility = 'hidden'
		clearInput()
	} else if (
		name.value == '' ||
		surrName.value == '' ||
		mail.value == '' ||
		city.value == '' ||
		address.value == '' ||
		address2.value == ''
	) {
		showError()
	}
}

const showError = () => {
	error.style.visibility = 'visible'
}

const clearInput = e => {
	e.preventDefault()
	;[name, surrName, mail, city, address, address2].forEach(el => {
		el.value = ''
	})
}

btn.addEventListener('click', checkForm)
