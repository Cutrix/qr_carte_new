<?php

namespace model;

use Engine\Db;
use Engine\easymysql;

class Client extends easymysql{

    protected $db;

    public function __construct()
    {
        $this->db = new Db;
        parent::__construct($this->db);
    }

    public function add(array $data)
    {
        $this->addToMysql('client', ['type_piece','numero_piece','nom_client','prenom_client','sexe_client','date_naissance_client',
            'lieu_naissance_client', 'ville_client', 'commune_client', 'quartier_client', 'numero_tel_client',
            'numero2_tel_client', 'email_client', 'boite_postale', 'id_qr_carte', 'secret', 'date_inscription', 'qr'], $data);

        return true;
    }

    public function count()
    {
        return $this->countFromMysql('client');
    }

    public function getAll() {
        return $this->getFromMysql('client');
    }

}