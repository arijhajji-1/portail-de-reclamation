<?php
require_once '../config.php';
require_once '../controller/userc.php';
require_once '../model/user.php';
class userc
{
    public function ajouterUser($user) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare('INSERT INTO user (nom, prenom, email ,pwd , sexe) 
                VALUES (:Nom, :Prenom, :Email, :Pwd, :Sexe)'
            );

            $query->execute([
                'Nom' => $user->getNom(),
                'Prenom' => $user->getPrenom(),
                'Email' => $user->getEmail(),
                'Pwd' => $user->getpwd(),
                'Sexe' => $user->getSexe(),
    
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }
    public function afficheruserc()
    {
        try {
        $pdo = getConnexion();
        $query = $pdo->prepare('SELECT * FROM user  ');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }
}