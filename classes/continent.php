<?php
class Continent {
    private $connect; 
    private $table = "continent"; 

    public $id_continent; 
    public $nom; 

   
    public function __construct($datab) {
        $this->connect = $datab;
    }

    
    public function create() {
        $query = "INSERT INTO $this->table (nom) VALUES ('$this->nom')";
        return $this->connect->query($query); 
    }

    
    public function read() {
        $query = "SELECT * FROM $this->table";
        $result = $this->connect->query($query); 
        if ($result) {
            return $result->fetchAll(PDO::FETCH_ASSOC); 
        }
    }

   
    public function update() {
    
    $query = "UPDATE $this->table 
              SET nom = :nom 
              WHERE id_continent = :id_continent";

    
    $stmt = $this->connect->prepare($query);
    return $stmt->execute([
        'nom' => $this->nom,
        'id_continent' => $this->id_continent
    ]);
}

public function delete() {
    // Supprimer pays 
    $deletePaysQuery = "DELETE FROM pays WHERE id_continent = :id_continent";
    $stmt = $this->connect->prepare($deletePaysQuery);
    $stmt->execute(['id_continent' => $this->id_continent]);

    // supprimer continent
    $query = "DELETE FROM $this->table WHERE id_continent = :id_continent";
    $stmt = $this->connect->prepare($query);
    return $stmt->execute(['id_continent' => $this->id_continent]);
}


   
    public function nombrecontinent() {
        $query = "
            SELECT continent.id_continent, continent.nom, COUNT(pays.id_pays) AS nombre_pays
            FROM continent
            LEFT JOIN pays ON continent.id_continent = pays.id_continent
            GROUP BY continent.id_continent, continent.nom
        ";
        $result = $this->connect->query($query);
        if ($result) {
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
}

?>
