function validateForm(){
    const firstName = document.getElementById('x1').value;
    const lastName = document.getElementById('x2').value;
    const username = document.getElementById('x5').value;
    const email = document.getElementById('x6').value;
    const password = document.getElementById('x7').value;
    const confirmPassword = document.getElementById('x8').value;
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
