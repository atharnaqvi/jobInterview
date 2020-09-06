const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLink = document.getElementsByTagName("ul")[1];

toggleButton.addEventListener('click', () => {
	navbarLink.classList.toggle("active");
})