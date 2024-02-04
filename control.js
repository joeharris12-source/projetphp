function validateForm(){
    var span=document.getElementById("verification");
    var passwrd= document.getElementById("mtdpas").value;
    var passwrd_conf= document.getElementById("confirm").value;
    if(passwrd!==passwrd_conf){
        event.preventDefault();
        span.innerText="Mots de passes incompatibles: Reprenez la saisie";
        span.style.color="red";
    }
}


