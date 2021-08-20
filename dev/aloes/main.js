import './style.scss';
import './src/index.css'

let init = () => {

    const bar = document.querySelector('.owp-floating-bar');
    const menuLabel = document.querySelector('a.sidr-class-toggle-sidr-close')

    if(bar) {

        bar.style.marginTop = '-40px'
    } else { }

    if(menuLabel) {
        menuLabel.innerHTML = 'Zamknij menu';
    }
   
};

window.addEventListener('DOMContentLoaded', init())
