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


document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll("header a");
  
   
    links.forEach(function(link) {
      link.dataset.defaultColor = "#333"; 
    });
  
    
    links.forEach(function(link) {
      link.addEventListener("mouseover", function() {
        this.style.color = "white"; 
      });
  
      link.addEventListener("mouseout", function() {
        this.style.color = this.dataset.defaultColor; 
      });
    });
  });