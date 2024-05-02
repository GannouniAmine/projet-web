function rateProduct(rating) {
    document.getElementById("rating").textContent = rating;
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.style.color = 'black';
    });
    for (let i = 0; i < rating; i++) {
        stars[i].style.color = 'gold';
    }
}
function submitReview() {
    const reviewText = document.getElementById("review").value;
    const reviewContainer = document.getElementById("reviews");
    const reviewElement = document.createElement("p");
    reviewElement.textContent = reviewText;
    reviewContainer.appendChild(reviewElement);
}
