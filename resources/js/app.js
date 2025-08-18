import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

vue.component('buttons', require('./components/ButtonsComponent'))

Alpine.start();
