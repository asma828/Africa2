<?php
class Ville {
    private $connect; 

    public $id_ville; 
    public $nom_ville; 
    public $type; 
    public $id_pays; 
    public $description; 

    public function __construct($db) {
        $this->connect = $db;
    }

    public function create() {
        $query = "INSERT INTO ville (nom_ville, type, description, id_pays) 
                  VALUES ('$this->nom_ville', '$this->type', '$this->description', '$this->id_pays')";

        return $this->connect->query($query); 
    }

    public function read() {
        $query = "SELECT ville.id_ville, ville.nom_ville, ville.type, ville.description, 
                         pays.nom_pays AS nom_pays
                  FROM ville
                  JOIN pays ON ville.id_pays = pays.id_pays";
        $result = $this->connect->query($query); 
        if ($result) {
            return $result->fetchAll(PDO::FETCH_ASSOC); 
        }
        return []; // Retourner un tableau vide si aucune donnée n'est trouvée
    }
    
    public function update() {
        $query = "UPDATE ville 
                  SET nom_ville = '$this->nom_ville', type = '$this->type', 
                      description = '$this->description', id_pays = '$this->id_pays' 
                  WHERE id_ville = $this->id_ville";

        return $this->connect->query($query); 
    }

    
    public function delete() {
        $query = "DELETE FROM ville WHERE id_ville = $this->id_ville";
        return $this->connect->query($query); 
    }
        // Fetch a single country's data by ID
public function readById() {
    $query = "SELECT * FROM ville WHERE id_ville = :id_ville";
    $stmt = $this->connect->prepare($query);
    $stmt->bindParam(':id_ville', $this->id_ville);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
?>
