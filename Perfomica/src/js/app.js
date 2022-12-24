import { initLazyLoad } from './modules/lazyLoad.js'
import { initHome } from './modules/home.js'
import './modules/popup.js';
import './modules/sidebar.js';

initLazyLoad()

document.addEventListener('DOMContentLoaded', () => {

	initHome()

});

