<?php

class InicioController extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    //usado para llamar al formulario principal
    public function index() {
        //instanciar noticias
        $noticias_obj = new Noticias();
        $noticias_inicio = $noticias_obj->getNoticiasInicio();
        //incluye la vista de consultor listar index
        $current_view = 'inicio/inicio.php';
        require_once 'views/layouts/' . $this->layout;
    }
    
    public function indexGranjero() {
        //instanciar noticias
        $noticias_obj = new Noticias();
        $noticias_inicio = $noticias_obj->getNoticiasInicio();
        //incluye la vista de consultor listar index
        $current_view = 'inicio/inicioGranjero.php';
        require_once 'views/layouts/' . $this->layout_gran;
    }
    
     public function indexConsultor() {
        //instanciar noticias
        $noticias_obj = new Noticias();
        $noticias_inicio = $noticias_obj->getNoticiasInicio();
        //incluye la vista de consultor listar index
        $current_view = 'inicio/inicioConsultor.php';
        require_once 'views/layouts/' . $this->layout_cons;
    }

    public function indexAdministrador() {
        //instanciar noticias
        $noticias_obj = new Noticias();
        $noticias_inicio = $noticias_obj->getNoticiasInicio();
        //incluye la vista de consultor listar index
        $current_view = 'inicio/inicioAdministrador.php';
        require_once 'views/layouts/' . $this->layout_admi;
    }
}