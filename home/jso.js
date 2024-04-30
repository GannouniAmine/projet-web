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