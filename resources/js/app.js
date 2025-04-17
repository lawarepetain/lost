import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


window.Echo.channel('chat.' + userId)
    .listen('.message.received', (e) => {
        alert('Nouveau message de ' + e.message.sender.name + ' : ' + e.message.contenu);
        // Tu peux aussi rafraîchir dynamiquement une div ici
    });
