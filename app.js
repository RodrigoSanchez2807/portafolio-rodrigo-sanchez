const toggleMenu = document.querySelector('#toggle');
const navigation = document.querySelector('#navigation');

toggleMenu.addEventListener('click', showMenu);

function showMenu () {
    navigation.classList.toggle('navigation--show');
    toggleMenu.classList.toggle('.menu-tog--close::before');
}