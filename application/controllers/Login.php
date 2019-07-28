<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { 
    

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('Login/principal');
    }

    public function loginView(){
        $this->load->view('Login/login');
    }

    public function registraView(){
        $this->load->view('Login/registro');
    }

    public function recuperaView(){
        $this->load->view('Login/recupera');
    }

    public function inicioSesion(){
        $this->load->model("usuario");
        $data = $this->input->post();
        $usuario = new Usuario();

        

        echo json_encode($data);
    }

    public function registro(){
        echo json_encode($this->input->post());
    }

    public function recuperaContrasena(){
        
    }
}

?>