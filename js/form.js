const name = document.querySelector('#inputName')
const sendBox = document.querySelector('.send-box')
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
		sendForm()
		clear()
		error.style.visibility = 'hidden'
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

const sendForm = () => {
	sendBox.classList.add('slide-bottom')
	// sendBox.style.visibility = 'visible'
}

const clear = () => {
	;[name, surrName, mail, city, address, address2].forEach(el => {
		el.value = ''
	})
}

btn.addEventListener('click', checkForm)
