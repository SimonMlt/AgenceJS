/**
 * Selectors
 * @type {Element}
 */
let formContact = document.querySelector('#form-contact');
let btnContact = document.querySelector('#btn-contact');

formContact.addEventListener("submit", function (e){
    e.preventDefault();
    btnContact.textContent = "Envoi du message..."

    //Faire une requête sur le controller contact pour envoyer le mail
    let request = new XMLHttpRequest();

    // Récupérer les inputs dans une variable
    let formData = new FormData(formContact);

    request.addEventListener("load", function (){
        btnContact.textContent = "Message envoyé";
    }, false);
    request.addEventListener("error", function (){
        btnContact.textContent = "Erreur d'envoi du message";
    }, false);

    request.open('POST', '/contact');
    request.send(formData);

});
