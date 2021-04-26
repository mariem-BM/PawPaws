<script>
function submitForm() {
  var login=document.getElementById('login').value;
  var password=document.getElementById('password').value;
  if(!login){
    document.getElementById("error-password").innerHTML = "";
    document.getElementById("error-login").innerHTML = "Le nom d'utilisateur est obligatoire";
  }else if(!password){
    document.getElementById("error-login").innerHTML = "";
    document.getElementById("error-password").innerHTML = "le mot de passe est obligatoire";
  }else{
    document.getElementById('signup_form').submit();
  }
}
</script>