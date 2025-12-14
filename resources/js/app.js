import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
import mask from '@alpinejs/mask';
Alpine.plugin(mask);
Alpine.start();

const selectElements = document.querySelectorAll('.status-form #status_id');
console.log(selectElements)
for (let elem of selectElements) {
    elem.addEventListener('change', function () {
        this.form.submit();
    });
}

import.meta.glob([
    '../images/**',
]);