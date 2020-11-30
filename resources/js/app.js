require('./bootstrap');
require('./livewire-turbolinks.js');
require('materialize-css');

var Turbolinks = require("turbolinks")
Turbolinks.start()

// Efecto fade al cambiar de pagina
document.addEventListener('turbolinks:load', (event) => {
    document.body.classList.add('animate__animated');
    document.body.classList.add('animate__fadeIn');
    npdocument.body.classList.add('animate__faster');    
})
