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
                  SET nom = '$this->nom' 
                  WHERE  id_continent = $this-> id_continent";
        return $this->connect->query($query); 
    }

  
    public function delete() {
        $query = "DELETE FROM $this->table WHERE  id_continent = $this-> id_continent";
        return $this->connect->query($query); 
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
