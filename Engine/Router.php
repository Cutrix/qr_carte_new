<?php

namespace Engine;

class Router {

    public static function run(array $params) {
        $ctrlPath = ROOT_PATH.'Controller/';
        $namespace = "Controller\\";
        $ctrl = ucfirst($params['ctrl']);

        if (is_file($ctrlPath.$ctrl.'.php')) {
            $ctrl = $namespace.$ctrl;
            $nCtrl = new $ctrl;

            if ((new \ReflectionClass($nCtrl))->hasMethod($params['act']) && (new \ReflectionMethod($nCtrl, $params['act']))->isPublic()) {
                call_user_func(array($nCtrl, $params['act']));
            } else {
                call_user_func(array($nCtrl, 'notFound'));
            }
        } else {
            call_user_func(array($nCtrl, 'notFound'));
        }
    }

}