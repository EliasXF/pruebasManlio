<?php namespace App\Controllers;
    use App\Models\Model_usuario; 

use CodeIgniter\Controller;
class LController extends BaseController
{   
    function __construct()
    {
        $this->model_usuario = new Model_usuario();
    }

    public function index()
    {
        $mensaje=session('mensaje'); 
        return view('Estructura', ["mensaje"=>$mensaje]);
    }

    public function login(){
        $usuario=$this->request->getPost('correo');
        $contrasenia=$this->request->getPost('contrasenia');
        $Model_usuario= new Model_usuario(); 

        $datosUsuario=$Model_usuario->getUser(['correo' => $usuario, 'contrasenia' => md5($contrasenia)]);
        /* var_dump($datosUsuario); */
        if(count($datosUsuario)){
        /*var_dump($datosUsuario);*/
            $data = [
                "usuario"=>$datosUsuario[0]['usuario'],
               /*  "type"=>$datosUsuario[0]['type'] */
            ];
            
            $session=session();
            $session->set($data);

            echo view('Views/page-components/panel');
        

        }else{
            echo view('inicio1');
        }



    }




    
}
