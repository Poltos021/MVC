<?php


namespace app\controller;

use system\Controller;

class Test extends Controller
{
    public function testAction(){
        $str = ' Hi test Lol Lolkovic somB@aderrr.com number +78800';
        $pattern = '|(\+7[0-9]{4})$|'; // phone number
        //$pattern ='|[a-zA-Z0-9.-]+@[a-zA-Z0-9.-]+|'; //email
        //$pattern = '|^[A-Za-z]+ [A-Za-z]+|'; //name
        $matches = null;
        //preg_match($pattern, $str,$matches);
        preg_match_all($pattern, $str, $matches);

        $this->view->matches = $matches;
    }

    public function paramAction()
    {

    }

}