<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identificacion extends CI_Controller 
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
        $data["nombreusuario"] = $this->session->userdata('nombre'); 
        $data["modulo"] = "Identificacion";
        $data["descripcion"] = "Listado de identificación";

        //1 - cargar el tema de la tabla: Flexigrid o datatables.
        $this->crud->set_theme('flexigrid');

        //2- Cargar la tabla
        $this->crud->set_table('identificacion');

        //Si queremes relacionar dos tablas y que podemos por medio de un select asociar un dato de una
        //de ellas usamos set_relation (campo de la tabla set table, la tabla asociar, que campo mostrar de la tabla asociar)
        //$this->crud->set_relation();

        //Definir que campos se deben cargar en editar o en el ingresar
        $this->crud->fields("eps","tipoid","tipocliente");

        //Definir que campos son requeridos
        //$this->crud->required_fields();

        //3 - Se le definde un titulo a la tabla
        $this->crud->set_subject("Identificacion");

        //Columnas
        $this->crud->columns("eps","tipoid","tipocliente");
        
        //Alias
        $this->crud->display_as("eps","EPS");
        $this->crud->display_as("tipoid","Tipo de Identificación");
        $this->crud->display_as("tipocliente","Tipo de Cliente");
        
        $this->crud->display_as("fechaingreso","Registro");
        $this->crud->display_as("fechamodificacion","Ultimo cambio");

        $tabla = $this->crud->render();

        //Los tres componentes se llaman output, js_files y css_files
        $data["contenido"] = $tabla->output;
        $data["js_files"]  = $tabla->js_files;
        $data["css_files"] = $tabla->css_files;

        $this->load->view('crud', $data);
    }
}

