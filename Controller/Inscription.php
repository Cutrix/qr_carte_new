<?php 

namespace controller;

class Inscription {

	protected $util, $model;
	private $_id;               

	public function __construct() {
            $this->util = new \Engine\Util;
            $this->util->getModel('Inscription');
            
            $this->model = new \Model\Inscription;
            
            $this->_id = (int) (!empty($_GET['id']) ? $_GET['p'] : 0);
        }
        
        //Page d'acceuil
	public function index()
	{
            $this->util->getView('index');
	}                
        
        public function notFound() {
            $this->util->getView('notFound');
        }
        
        public function add_client() {
            
            if (!empty($_POST['inscription'])) {
                extract($_POST);
                if (!empty($piece) && !empty($nom_client) && !empty($numPiece) && !empty($prenom_client) && !empty($sexe) && !empty($date_naiss_client) && !empty($lieu_habitation_client) && !empty($ville_client) && !empty($commune_client) && !empty($quartier_client) && !empty($telephone_client)){
                    $secret = \Engine\GenMat::gen_mat($nom_client, $numPiece, $prenom_client);
                    $qr = "Qr/".$secret."/".$secret.".png";
                    $data = array(htmlspecialchars($piece), 
                            htmlspecialchars($numPiece),
                            htmlspecialchars($nom_client),
                            htmlspecialchars($prenom_client),
                            htmlspecialchars($sexe),
                            htmlspecialchars($date_naiss_client),
                            htmlspecialchars($lieu_naissance_client),
                            htmlspecialchars($ville_client),
                            htmlspecialchars($commune_client),
                            htmlspecialchars($quartier_client),
                            htmlspecialchars($telephone_client),
                            htmlspecialchars($telephone2_client),
                            htmlspecialchars($email_client),
                            htmlspecialchars($boite_postale),
                            $this->model->getLastId(), 
                            htmlspecialchars($secret),
                            $now = date('Y-m-d H:i'),
                            htmlspecialchars($qr));
                        
                    if($this->model->add_client($data))
                        $this->util->success = "Le client a bien ete ajoute";
                    else 
                        
                        $this->util->error = "Oops! Erreur, veuillez ressayer";
                    \Engine\qrGen::createDirectory("Qr/".$secret."/");
                    require 'Engine/phpqrcode.php';
                    \QRcode::png($secret, $qr);
                } else {                   
                    $this->util->msgJs = "<script>alert('Remplissez tous les champs')</script>";                    
                }
            }
            
            $this->util->getView('inscription_client');
        }
        
        public function add_chauffeur() {
            
        }
}