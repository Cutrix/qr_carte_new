<?php

namespace Model;

class Inscription extends \Engine\easymysql {
    
    protected $db;
    
    public function __construct() {
        $this->db = new \Engine\Db;
        parent::__construct($this->db);
    }
    
    public function add_client(array $data) {       
        $this->addToMysql('client', ['type_piece','numero_piece','nom_client','prenom_client','sexe_client','date_naissance_client',
                            'lieu_naissance_client', 'ville_client', 'commune_client', 'quartier_client', 'numero_tel_client', 
                            'numero2_tel_client', 'email_client', 'boite_postale', 'id_qr_carte', 'secret', 'date_inscription', 'qr'], $data);
    }
    
    public function getLastId() {
        return $this->db->lastInsertId();
    }   
    
}

