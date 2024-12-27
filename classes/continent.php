<?php
class Continent {
    private $connect; 
    private $table = "continent"; 

    public $id_continent; 
    public $nom; 

   
    public function __construct($db) {
        $this->connect = $db;
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
                  SET nom = '$this->nom' 
                  WHERE  id_continent = $this-> id_continent";
        return $this->connect->query($query); 
    }

  
    public function delete() {
        $query = "DELETE FROM $this->table WHERE  id_continent = $this-> id_continent";
        return $this->connect->query($query); 
    }
}
?>
