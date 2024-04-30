function growButton(event) {
    const btn = event.target;
    btn.style.transform = 'scale(1.1)';
  }
  
  function shrinkButton(event) {
    const btn = event.target;
    btn.style.transform = 'scale(1)';
  }
  
  document.addEventListener("mouseover", function(event) {
    if (event.target && (event.target.matches(".btn")||event.target.matches(".btn1"))) {
      growButton(event);
    }
  });
  
  document.addEventListener("mouseout", function(event) {
    if (event.target && (event.target.matches(".btn")||event.target.matches(".btn1"))) {
      shrinkButton(event);
    }
  });