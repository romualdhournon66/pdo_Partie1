<?php

class clients {

    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '00/00/0000';
    public $card = false;
    public $cardNumber = NULL;
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
     * Méthode permettant de récuperer la liste des clients avec nom, prenoms,date de naissance, carte fidélité(oui/non), numéro de carte si oui
     * @return array
     */
    public function getClientList() {
        $query = 'SELECT id,lastName,firstName,DATE_FORMAT(birthDate,\'%e/%m/%Y\') AS birthDate, CASE WHEN card = 1 THEN \'OUI\' WHEN card = 0 THEN \'NON\' ELSE \'Etat inconnu\' END AS card, COALESCE(cardNumber, \'none card\') AS cardNumber,cardNumber FROM clients';
        $queryResult = $this->db->query($query);
        return $queryResult->fetchAll(PDO::FETCH_OBJ);
    }
}

?>