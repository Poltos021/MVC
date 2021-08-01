<?php

namespace app\controller;

use system\Adab;
use system\Controller;

class Index extends Controller {
 
    public function indexAction(){
        $this->view->test = 'Hi';
        $pdo = Adab::get();
        $prepaired = $pdo->prepare('SELECT * From');
        $prepaired->execute();
        $this->view->allSelect = $prepaired->fetchAll();
    }

    public function aboutUsAction(){

    }

    public function error404Action(){

    }
}