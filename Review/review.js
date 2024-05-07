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
}
function myFunction1() {
    alert("You selected some text!");
}