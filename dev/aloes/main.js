import './style.scss';
import './src/index.css'

let init = () => {

    const bar = document.querySelector('.owp-floating-bar');
    const menuLabel = document.querySelector('.sidr-class-close-text')

    if(bar) {

        bar.style.marginTop = '-40px'
    } else { }

    if(menuLabel) {
        menuLabel.innerHTML = 'Zamknij menu';
    }

};

window.addEventListener('DOMContentLoaded', init())