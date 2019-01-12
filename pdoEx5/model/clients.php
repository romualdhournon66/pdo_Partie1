<?php

class clients {

    public $lastName = '';
    public $firstName = '';
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
     * Méthode permettant de récuperer la liste des clients dont le nom commence par M
     * @return array
     */
    public function getClientListM() {
        $query = 'SELECT `lastName`, `firstName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName` ASC';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}

?>