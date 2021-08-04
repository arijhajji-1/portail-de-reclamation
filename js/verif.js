


function verif()
{
    e=f.email.value;
    n=f.nom.value;
    p=f.prenom.value;
    m=f.pwd.value;
   

    if(n=="")
    {
        alert("Veuillez saisir le nom !");
        document.getElementById("nom").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("nom").style.borderColor = "black";
    }

    if((n.charAt(0)>="A")&&(n.charAt(0)>="Z"))
    {
        alert("Le premier caractére doit être en majuscule !");
        document.getElementById("nom").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("nom").style.borderColor = "black";
    }



    if(p=="")
    {
        alert("Veuillez saisir le prenom !");
        document.getElementById("prenom").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("prenom").style.borderColor = "black";
    }

    if((p.charAt(0)>="A")&&(p.charAt(0)>="Z"))
    {
        alert("Le premier caractére doit être en majuscule !");
        document.getElementById("prenom").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("prenom").style.borderColor = "black";
    }

   
    if(e.length=='')
    {
        alert("Veuillez saisir votre adresse E-mail !");
        document.getElementById("email").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("email").style.borderColor = "black";
    }

    if(m.length=='')
    {
        alert("Veuillez saisir votre mot de passe !");
        document.getElementById("pwd").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("pwd").style.borderColor = "black";
    }

    if(m.length<8)
    {
        alert("Veuillez saisir le mot de passe correctement !");
        document.getElementById("pwd").style.borderColor = "red";
        return false;
    }
    else{
        document.getElementById("pwd").style.borderColor = "black";
    }
    
  if(f.sexe.selectedIndex == "0")
    {
        alert("Veuillez choisir votre sexe ! ");
        return false;
    }

}