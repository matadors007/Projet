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
    if (document.getElementById('psd').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Mot De Passe');
        return false;
    }
    if (document.getElementById('tel').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Un Numero De Telephone');
        return false;
    }
    if (document.getElementById('confirm').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer La Confirmation De Mot De Passe');
        return false;
    }

    var v=1; //Test Sur Le Numero De Telephone il doit etre de 8 chiffres et contient seulement des chiffres
    var taille =document.getElementById('tel').value.length;
    for(i=0;i<taille;++i)
    {if(document.getElementById('tel').value.charAt(i) < "0" || document.getElementById('tel').value.charAt(i) > "9" || taille!=8) v = -1;}
    if(v == -1) {alert("Le num�ro DE Telephone est incorrect!"); return false; }
    
  if (document.getElementById('psd').value.length < 6) {   //le mot de passe doit etre plus de 6 caracteres
        alert("Donner Un Mot De Passe Plus long");
        return false;}



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
    var a = document.getElementById('psd').value;//le mot de passe et la confirmation de mot de passe doit etre le meme
    var b = document.getElementById('confirm').value;
    
   if (a!=b) {alert("Les mots de passe ne correspondent pas.");
                return false;}
    else {
      //alert("Les mots de passe correspondent.");
      document.f.submit();
    }

    
}




