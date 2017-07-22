<?php

namespace Controller;

class Acceuil {

    public function __construct() {
        $this->util = new \Engine\Util;
    }

    public function acceuil() {
        $this->util->getView('index');
    }

    public function notFound() {
        $this->util->getView('notFound');
    }


}