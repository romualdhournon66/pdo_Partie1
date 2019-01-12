<?php

class showType {
    public $id = 0;
    public $type = '';
    private $db;
    
    public function __construct() {
        try {
            // On se connecte à MySQL
            $this->db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'levequem', 'dexter02');
        } catch (Exception $e) {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : ' . $e->getMessage());
        }
    }
    
    /**
     * Méthode permettant de récuperer la liste des types de spectacles
     * @return array
     */
    public function getShowType() {
        $query = 'SELECT * FROM `showTypes`';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}
?>