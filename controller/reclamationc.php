<?php
require_once '../config.php';
require_once '../controller/reclamationc.php';


class reclamationc {

	public function recupereretat($id_rec) {
           try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reclamation WHERE id_rec= :id_rec'
                );
                $query->execute([
                    'id_rec' => $id_rec
                ]);

                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function ajouterreclamation($reclamation)
        {
    
            $sql="INSERT INTO reclamation ( id_user,nom,description,type) 
                VALUES (:id_user,:nom,:description, :type)";
                                $db = getConnexion();
    
                try{
                    $query = $db->prepare($sql);
                
                    $query->execute([
                        'id_user'=>$reclamation->getidcl(),
                        'nom'=>$reclamation->getnomm(),
                        'description' => $reclamation->getdescription(),
                        'type' => $reclamation->gettype(),
                       
                        
                    ]);         
            
               
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }

    
   public function afficherreclamation()
    {
        try {
        $pdo = getConnexion();
        $query = $pdo->prepare('SELECT * FROM reclamation ORDER BY date_reclamation desc');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

    

    
    
 public function modifier($etat, $id_rec) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE reclamation SET 
                       etat=:etat
                       WHERE id_rec= :id_rec'                                                                       
                );
                
                $query->execute([
                    'etat' => $etat,
                    'id_rec'=>$id_rec
                ]);
                
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                echo "erreur";
                $e->getMessage();
            }
        }

        function rechercherreclamation($valuesearch)
    {
                $sql="SELECT * from reclamation where nom like '%$valuesearch%' ";
                $db = getConnexion();
      	try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: rechercherreclamation '.$e->getMessage());
        }
	}

}