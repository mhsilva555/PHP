<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Crud;

class CadastroController extends Controller {

    public function cadastro(){
        $this->render('cadastro');
    }

    public function cadastroAction(){
        //print_r($_POST);
        $instance = Crud::getInstance();
        $instance = Crud::Create($_POST);
        //$instance = Crud::Read("SELECT * FROM usuarios");
    }

}