(function headerMenu() {
    const botonMenu = document.querySelector('.header-menu');
    const ventana = document.querySelector('.header-content-links');
    let menuOpen = false;
    let ventanaOpen = false;

    botonMenu.addEventListener('click', ()=> {
        if(!menuOpen) {
            botonMenu.classList.add('open');
            menuOpen = true;
        } else {
            botonMenu.classList.remove('open');
            menuOpen = false;
        }
    });
    botonMenu.addEventListener('click', ()=> {
        if(!ventanaOpen) {
            ventana.classList.add('open');
            ventanaOpen = true;
        } else {
            ventana.classList.remove('open');
            ventanaOpen = false;
        }
    })
})();