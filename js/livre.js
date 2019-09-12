function verif(){
    if (document.getElementById('nom').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Nom');
        return false;
    }
    if (document.getElementById('prenom').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Prenom');
        return false;
    }
    if (document.getElementById('titre').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer le Titre de livre');
        return false;
    }
    if (document.getElementById('nb').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer le nombre de livre');
        return false;
    }
 
    if (document.getElementById('dat').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer la date d"Edition');
        return false;
    }
     
    var letters = /^[A-Z a-z]+$/;
    if(document.getElementById('nom').value.match(letters))
      {
      }
    else
      {
      alert("verifier Le Nom d'Auteur");
      return false;
      }
      if(document.getElementById('prenom').value.match(letters))
      {
      }
    else
      {
      alert("verifier Le Prenom d'Auteur ");
      return false;
      }
}

