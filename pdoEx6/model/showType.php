<?php

class show {
    public $id = 0;
    public $title = '';
    public $performer = '';
    public $date = '00/00/0000';
    public $startTime = '00:00:00';
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
     * Méthode permettant de récuperer la liste des spectacle en fonction des artistes
     * @return array
     */
    public function getShow() {
        $query = 'SELECT `id`, `title`, `performer`, DATE_FORMAT(`date`,\'%e/%m/%Y\') AS `date`, `startTime` FROM `shows` ORDER BY `title` ASC';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}
?>