function verif() {    

var pass = document.querySelector('#pass').value
var pass1 = document.querySelector('#pass1').value;

    if (pass !== pass1 || pass === "" || pass1 === "") {
        alert("Veuillez vérifier le mot de passe saisi");
        document.querySelector('#pass').value = "";
        document.querySelector('#pass1').value = "";
        document.querySelector('#pass').focus();
    }
}