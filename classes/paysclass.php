<?php
class Pays {
    private $connect; 

    public $id_pays; 
    public $nom_pays; 
    public $population; 
    public $langues; 
    public $id_continent; 


    public function __construct($db) {
        $this->connect = $db;
    }

    // Create a new country
    public function create() {
        $query = "INSERT INTO pays (nom_pays, population, langues, id_continent) 
                  VALUES ('$this->nom_pays', '$this->population', '$this->langues', '$this->id_continent')";
                  echo"hhhhhhhhhhhhhhhhhhhhhhhh";
        return $this->connect->query($query); 
    }

    // Read all countries
    public function read() {
        $query = "SELECT pays.id_pays, pays.nom_pays, pays.population, pays.langues, continent.nom 
        FROM pays
        JOIN continent ON pays.id_continent = continent.id_continent";
        $result = $this->connect->query($query); 
        if ($result) {
            return $result->fetchAll(PDO::FETCH_ASSOC); 
        }
    }

    // Update country information
    public function update() {
        $query = "UPDATE pays 
                  SET nom_pays = '$this->nom_pays', population = '$this->population', 
                      langues = '$this->langues', id_continent = '$this->id_continent' 
                  WHERE id_pays = $this->id_pays";
        return $this->connect->query($query); 
    }

    // Delete a country
    public function delete() {
        $query = "DELETE FROM pays WHERE id_pays = $this->id_pays";
        return $this->connect->query($query); 
    }

    // Fetch a single country's data by ID
public function readById() {
    $query = "SELECT * FROM pays WHERE id_pays = :id_pays";
    $stmt = $this->connect->prepare($query);
    $stmt->bindParam(':id_pays', $this->id_pays);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
?>
