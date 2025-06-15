const starIconsEle = document.querySelectorAll('.fa-star');
let currentRating = 0; // To keep track of the current rating

starIconsEle.forEach((iconEle) => {
    iconEle.addEventListener("mouseenter", (ev) => {
        const id = parseInt(ev.currentTarget.id.split("-")[2]);

        // Highlight stars up to the hovered star
        highlightStars(id);
    });

    iconEle.addEventListener("click", (ev) => {
        currentRating = parseInt(ev.currentTarget.id.split("-")[2]); // Update current rating on click
        highlightStars(currentRating); // Highlight stars based on the selected rating
    });
});

function highlightStars(rating) {
    starIconsEle.forEach((ele, index) => {
        if (index < rating) {
            ele.classList.add("text-yellow-500");
        } else {
            ele.classList.remove("text-yellow-500");
        }
    });
}

document.getElementById("stars").addEventListener("mouseleave", () => {
    highlightStars(currentRating);

})

