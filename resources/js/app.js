import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();
import '../css/app.css';

import 'leaflet/dist/leaflet.css';
import L from 'leaflet';

document.addEventListener('DOMContentLoaded', () => {
  const map = L.map('map').setView([20.89377886371049, -89.6208303550479], 13);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);
  L.marker([20.89377886371049, -89.6208303550479]).addTo(map);
});