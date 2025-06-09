document.querySelectorAll('.form-container').forEach(container => {
    const editButton = container.previousElementSibling; // Get the Edit button
    editButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default link behavior
        container.classList.toggle('hidden'); // Toggle the visibility of the form
    });
});
