<?php

namespace controller;

class Client {

    protected $util, $model;
    private $_id;

    /*Debut constructor*/
    public function __construct() {
        $this->util = new \Engine\Util;
        // $this->util->getModel('Inscription_chauffeur');

        $this->model = new \Model\Client;

        $this->_id = (int) (!empty($_GET['id']) ? $_GET['id'] : 0);
    }
    /* End Constructor*/

    public function notFound() {
        $this->util->getView('notFound');
    }

    public function add() {

        $this->util->suscr = "Client";

        if (!empty($_POST['inscription'])) {
            extract($_POST);
            if (!empty($piece) && !empty($nom) && !empty($numPiece) && !empty($prenom) && !empty($sexe) && !empty($date_naiss) && !empty($lieu_habitation) && !empty($ville) && !empty($commune) && !empty($quartier) && !empty($telephone)) {
                $secret = \Engine\GenMat::gen_mat($nom, $numPiece, $prenom);
                $qr = "Qr/" . $secret . "/" . $secret . ".png";
                $data = array(htmlspecialchars($piece),
                    htmlspecialchars($numPiece),
                    htmlspecialchars($nom),
                    htmlspecialchars($prenom),
                    htmlspecialchars($sexe),
                    htmlspecialchars($date_naiss),
                    htmlspecialchars($lieu_naissance),
                    htmlspecialchars($ville),
                    htmlspecialchars($commune),
                    htmlspecialchars($quartier),
                    htmlspecialchars($telephone),
                    htmlspecialchars($telephone2),
                    htmlspecialchars($email),
                    htmlspecialchars($boite_postale),
                    $this->model->count(),
                    htmlspecialchars($secret),
                    $now = date('Y-m-d H:i:s'),
                    htmlspecialchars($qr));

                if ($this->model->add($data)){
                    $this->util->success = "Le client a bien ete ajoute";
                }
                else
                    $this->util->error = "Oops! Erreur, veuillez ressayer";
                \Engine\qrGen::createDirectory("Qr/" . $secret . "/");
                require 'Engine/phpqrcode.php';
                \QRcode::png($secret, $qr);
            } else {
                $this->util->msgJs = "<script>alert('Remplissez tous les champs')</script>";
            }
        }

        $this->util->getView('suscribe_form');
    }


    public function delete() {
        $this->model->delete($this->_id);
        $this->util->nbBase = $this->model->countFromMysql('client');
        //header('Location: '.ROOT_URL);
    }

    public function getAll() {
        $postss = $this->model->getAll();
        $this->util->clients = $postss;
        $this->util->getView('clients');
    }

    public function search() {
        if (isset($_POST['rech'])) {
            var_dump($_POST);
        }
        $this->util->getView('search');
    }

    public function update() {
        $this->util->clients = $this->model->get($this->_id);
        $this->util->getView("modification");
    }

}
