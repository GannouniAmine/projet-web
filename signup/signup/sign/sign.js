function validateForm(){
    const firstName = document.getElementById('x1').value.trim();
    const lastName = document.getElementById('x2').value.trim();
    const username = document.getElementById('x5').value.trim();
    const email = document.getElementById('x6').value.trim();
    const password = document.getElementById('x7').value.trim();
    const confirmPassword = document.getElementById('x8').value.trim();
    let t=false;
    if (firstName === '' || lastName === ''|| username === '' || email === '' || password === '' || confirmPassword === '') {
        alert('Veuillez remplir tous les champs.');
        return t;
    }
    if (password !== confirmPassword) {
        alert('Les mots de passe ne correspondent pas.');
        return t; 
    }
    alert('Formulaire soumis avec succès !');
    return !t;
}
function caractere(){
    chaine="Nous sommes absolument ravis d accueillir notre nouveau client";
    alert(chaine);
  }
