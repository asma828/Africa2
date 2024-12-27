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

    // Create a new city
    public function create() {
        $query = "INSERT INTO ville (nom_ville, type, description, id_pays) 
                  VALUES (:nom_ville, :type, :description, :id_pays)";
        $stmt = $this->connect->prepare($query);

        $stmt->bindParam(':nom_ville', $this->nom_ville);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':id_pays', $this->id_pays);

        return $stmt->execute();
    }

    // Read all cities
    public function read() {
        $query = "SELECT ville.id_ville, ville.nom_ville, ville.type, ville.description, 
                         pays.nom_pays AS nom_pays
                  FROM ville
                  JOIN pays ON ville.id_pays = pays.id_pays";
        $stmt = $this->connect->query($query);
        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        }
        return []; // Return an empty array if no data is found
    }

    // Update a city
    public function update() {
        $query = "UPDATE ville 
                  SET nom_ville = :nom_ville, 
                      type = :type, 
                      description = :description, 
                      id_pays = :id_pays 
                  WHERE id_ville = :id_ville";
        $stmt = $this->connect->prepare($query);

        $stmt->bindParam(':nom_ville', $this->nom_ville);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':id_pays', $this->id_pays);
        $stmt->bindParam(':id_ville', $this->id_ville);

        return $stmt->execute();
    }

    // Delete a city
    public function delete() {
        $query = "DELETE FROM ville WHERE id_ville = :id_ville";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':id_ville', $this->id_ville);
        return $stmt->execute();
    }

    // Fetch a single city's data by ID
    public function readById() {
        $query = "SELECT * FROM ville WHERE id_ville = :id_ville";
        $stmt = $this->connect->prepare($query);
        $stmt->bindParam(':id_ville', $this->id_ville);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
