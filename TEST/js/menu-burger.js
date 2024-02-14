function openMenuMobile() {
    document.querySelector('.header__nav').classList.add('open');

    formInfo = document.getElementById('divacacher');

    /* regarde si la popup form n'est pas ouverte et si oui il la ferme */
    if (formInfo.style.display == 'block') {
        AfficherMasquer();
    }
}

function closeMenuMobile() {
    document.querySelector('.header__nav').classList.remove('open');
}