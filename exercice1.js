function envoyer(){
    var today = new Date();
    var annee = today.getFullYear();
    var date = today.getDate();
    var verif_an = document.getElementById("verif_an");
    var verif_an_naiss = document.getElementById("date_n");
    var naiss =  document.getElementById("date").value;
    var anneebac = document.getElementById("anneebac").value;
    var vrai = annee-2
    if((annee - anneebac)>2){
        event.preventDefault();
        verif_an.innerText = "Impossibe de soumettre. Votre bac doit etre au plus vieux de "+vrai;
        verif_an.style.color="red";
    }
    if( naiss >= date){
        event.preventDefault();
        verif_an_naiss.innerText = "Saisi incorect.";
    }
}

