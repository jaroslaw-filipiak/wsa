import './style.scss';
import './src/index.css'

let init = () => {

    const bar = document.querySelector('.owp-floating-bar');

    if(bar) {

        bar.style.marginTop = '-40px'
    } else { }

};

window.addEventListener('DOMContentLoaded', init())