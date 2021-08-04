<?php
class user
{
    private  $id_user= null;
    private  $nom;
    private  $prenom;
    private  $email;
    private  $pwd;
    private  $sexe;
    
    public function __construct($nom,$prenom,$email,$pwd,$sexe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->sexe = $sexe;}
    public function getid () {
        return $this->Id;
    }
   
    public function getNom () {
        return $this->nom;
    }
    public function getPrenom () {
        return $this->prenom;
    }
    public function getEmail () {
        return $this->email;
    }
  
    public function getpwd() {
        return $this->pwd;
    }
    public function getSexe () {
        return $this->sexe;
    }
  
    public function setNom ($nom){
        $this->nom = $nom;
    }
    public function setPrenom ($prenom){
        $this->prenom = $prenom;
    }
    public function setEmail ($email){
        $this->email = $email;
    }
   
    public function setpwd ($pwd){
        $this->pwd = $pwd;
    }
   public function setSexe ($sexe){
        $this->sexe = $sexe;
    }
    
}
?>