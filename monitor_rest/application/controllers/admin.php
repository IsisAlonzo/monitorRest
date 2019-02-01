<?php

class Usuarios extends M_controller
{
    public function index()
    {
        edirect(base_url().'login');
        /*$this->load->model('AdminModel');
        if(isset($_SESSION['Userid']))
        {
            $this->data['nombre']=$_SESSION['UserName'];
            
            //$this->noticias();
        }
        else
        {
            redirect(base_url().'login');
        }*/
    }
    
    public function Login_()
    {

    }

    public function Logout_()
    {

    }

}
