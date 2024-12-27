<?php
class Pays {
    private $connect; 
    private $table = "pays"; 

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
        $query = "INSERT INTO $this->table (nom_pays, population, langues, id_continent) 
                  VALUES ('$this->nom_pays', '$this->population', '$this->langues', '$this->id_continent')";
        return $this->connect->query($query); 
    }

    // Read all countries
    public function read() {
        $query = "SELECT * FROM $this->table";
        $result = $this->connect->query($query); 
        if ($result) {
            return $result->fetchAll(PDO::FETCH_ASSOC); 
        }
    }

    // Update country information
    public function update() {
        $query = "UPDATE $this->table 
                  SET nom_pays = '$this->nom_pays', population = '$this->population', 
                      langues = '$this->langues', id_continent = '$this->id_continent' 
                  WHERE id_pays = $this->id_pays";
        return $this->connect->query($query); 
    }

    // Delete a country
    public function delete() {
        $query = "DELETE FROM $this->table WHERE id_pays = $this->id_pays";
        return $this->connect->query($query); 
    }
}
?>
