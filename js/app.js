if('serviceWorker' in navigator){
    navigator.serviceWorker.register('/PWA/ServiceWorker.js') //calling Service worker
    .then( (sw) => console.log('Le Service Worker a été pris en charge', sw)) // If the Service worker lauch correctly, dislay this
    .catch((err) => console.log('Le Service Worker est introuvable', err)); // else display this
}