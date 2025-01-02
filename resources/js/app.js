import './bootstrap';
import pie from './piChart'; // Import pie function from piChart.js
window.pie = pie; // Make pie function available globally

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'
 
Alpine.plugin(persist)

window.Alpine = Alpine;

Alpine.start();