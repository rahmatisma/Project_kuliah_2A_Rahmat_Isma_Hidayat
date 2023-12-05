const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const loginlink = document.getElementById('signInRes');
const registerlink = document.getElementById('signUpRes');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

loginlink.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

registerlink.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});