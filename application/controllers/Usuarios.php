<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller 
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

        /*
        if (!$this->session->userdata('id')) 
        {
            redirect('usuarios');
        }
        */
    }

    public function index()
    {
        /*
        $data["nombreusuario"] = $this->session->userdata('nombre'); 
        $data["fotousuario"]   = $this->session->userdata('foto'); 
        $data["modulo"]        = "";
        $data["descripcion"]   = "";*/

        $data["nombreusuario"] = $this->session->userdata('nombre'); 
        $data["modulo"] = "Usuarios";
        $data["descripcion"] = "Listado de usuarios en el sistema";

        //1 - cargar el tema de la tabla: Flexigrid o datatables.
        $this->crud->set_theme('flexigrid');

        //2- Cargar la tabla
        $this->crud->set_table('cliente');

        //Definir que campos se deben cargar en editar o en el ingresar
        $this->crud->fields("id","nombre","apellidos","telefono","fechanacimiento","eps","tipoid","tipocliente","imagen","observaciones");

        //Definir que campos son requeridos
        //$this->crud->required_fields();

        //Si queremes relacionar dos tablas y que podemos por medio de un select asociar un dato de una
        //de ellas usamos set_relation (campo de la tabla set table, la tabla asociar, que campo mostrar de la tabla asociar
        $this->crud->set_relation("eps","identificacion","eps");
        $this->crud->set_relation("tipoid","identificacion","tipoid");
        $this->crud->set_relation("tipocliente","identificacion","tipocliente");

        //3 - Se le definde un titulo a la tabla
        $this->crud->set_subject("Usuarios");

        //Alias
        $this->crud->display_as("fechanacimiento","Fecha de nacimiento");
        $this->crud->display_as("tipoid","Tipo de identificación");
        $this->crud->display_as("tipocliente","Tipo de cliente");
        $this->crud->display_as("fechaingreso","Registro");
        $this->crud->display_as("fechamodificacion","Ultimo cambio");

        //Columnas
        $this->crud->columns("imagen","id","nombre","apellidos","telefono","fechanacimiento","eps","tipoid","tipocliente","observaciones","fechaingreso","fechamodificacion");
        $this->crud->set_field_upload("imagen","assets/uploads/usuarios/");
        /*$data["fotousuario"]   = $this->session->userdata('foto'); 
        $data["linkedin"]      = $this->session->userdata('linkedin'); */

        $tabla = $this->crud->render();

        //Los tres componentes se llaman output, js_files y css_files
        $data["contenido"] = $tabla->output;
        $data["js_files"]  = $tabla->js_files;
        $data["css_files"] = $tabla->css_files;

        $this->load->view('crud', $data);
    }
}

