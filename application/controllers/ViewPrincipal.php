<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewPrincipal extends CI_Controller 
{
    function __construct()
    {
        //Hereda las caracteristicas del constructor
        parent:: __construct();

        //Cargar libreria
        $this->load->library('grocery_CRUD');

        //instanciar la libreria
        $this->crud = new grocery_CRUD();

        // invocar el modelo
        $this->load->model("usuarios_model");

        if (!$this->session->userdata('id')) 
        {
            redirect('usuarios');
        }
    }

    public function index()
    {
        $this->load->view('viewPrincipal');
    }
}

