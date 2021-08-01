<?php

namespace system;

abstract class Controller{

    public $view = null;
    public $params = [];

    public function redirect($url){
        header('Location' . $url);
        die;
    }
    public function goHome(){
        $this->redirect('/MVP(C)/index');
    }
}
