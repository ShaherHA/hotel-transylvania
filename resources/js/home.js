// Room type filtering
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.room-filter');
    const roomCards = document.querySelectorAll('.room-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filterType = this.getAttribute('data-type');
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-500', 'text-white');
                btn.classList.add('bg-white', 'text-gray-700');
            });

            this.classList.add('active', 'bg-blue-500', 'text-white');
            this.classList.remove('bg-white', 'text-gray-700');

            // Filter rooms
            roomCards.forEach(card => {
                if (filterType === 'all' || card.getAttribute('data-type') === filterType) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Smooth scroll for "Explore Rooms" button
    document.querySelector('a[href="#rooms"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('#rooms').scrollIntoView({
            behavior: 'smooth'
        });
    });
});
