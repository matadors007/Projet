function verif(){
    if (document.getElementById('nom').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Nom');
        return false;
    }
    if (document.getElementById('prenom').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Prenom');
        return false;
    }
    if (document.getElementById('email').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Email');
        return false;
    }
    if (document.getElementById('adresse').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre adresse');
        return false;
    }
    if (document.getElementById('cin').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer CIN');
        return false;
    }
    if (document.getElementById('password').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer le Mot De Passe');
        return false;
    }

    var v=1; //Test Sur Le Numero De Telephone il doit etre de 8 chiffres et contient seulement des chiffres
    var taille =document.getElementById('cin').value.length;
    for(i=0;i<taille;++i)
    {if(document.getElementById('cin').value.charAt(i) < "0" || document.getElementById('tel').value.charAt(i) > "9" || taille!=8) v = -1;}
    if(v == -1) {alert("Votre CIN est incorrect!"); return false; }
    
  if (document.getElementById('password').value.length < 6) {   //le mot de passe doit etre plus de 6 caracteres
        alert("Donner Un Mot De Passe Plus long");
        return false;}


/*    var e = [a-zA-Z];
    for(let i=0;i<document.getElementById('nom').value.length;i++){
    if(document.getElementById('nom').value.charAt(i) != e){
        alert("verifier votre nom");
    }*/
    var letters = /^[A-Z a-z]+$/;
    if(document.getElementById('nom').value.match(letters))
      {
      }
    else
      {
      alert("verifier votre nom");
      return false;
      }
      if(document.getElementById('prenom').value.match(letters))
      {
      }
    else
      {
      alert("verifier votre prenom");
      return false;
      }
   

    
}




