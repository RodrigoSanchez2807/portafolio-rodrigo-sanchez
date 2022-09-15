const toggleMenu = document.querySelector('#toggle');
const navigation = document.querySelector('#navigation');
const menuItem = document.querySelectorAll('.menu-item');
const iconItem = document.querySelectorAll('.menu-item-icon');

toggleMenu.addEventListener('click', () => {navigation.classList.toggle('navigation--show');});



function hideMenu(){
    navigation.classList.remove('navigation--show');
}
menuItem.forEach(n => n.addEventListener('click', hideMenu));

iconItem.forEach(n => n.addEventListener('click', hideMenu));
