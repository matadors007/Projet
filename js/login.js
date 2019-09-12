function verif(){
if (document.getElementById('password').value == '') {
    alert('Le champ ne peut pas rester vide !! Entrer Votre Mot De Passe');
    return false;
}
if (document.getElementById('password').value.length < 8) {   
    alert("Donner Un Mot De Passe Plus long");
    return false;}
    if (document.getElementById('email').value == '') {
        alert('Le champ ne peut pas rester vide !! Entrer Votre Email');
        return false;
    }
}