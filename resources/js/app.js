import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.querySelectorAll('.form-container').forEach(container => {
    const editButton = container.previousElementSibling; // Get the Edit button
    editButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default link behavior
        const form = container;
        form.classList.toggle('hidden'); // Toggle the visibility of the form
    });
});
