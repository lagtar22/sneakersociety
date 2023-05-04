<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Contacto;
class Contacto extends Controller
{
    protected $contacto;
    
    public function __construct()
    {
        $this->contacto = new Model_Contacto();
        helper(['form']);
    }
    // Se guarda los mensajes que se recibieron
    public function cargarMensaje()
    {
        $reglasValidacion = $this->validate(
            [
            "cont_Nombre"   => "required",
            "cont_Apellido" => "required",
            "cont_Mensaje"  => "required|min_length[3]|max_length[200]",
            "cont_Email"    => "required|valid_email",
            "cont_Asunto"   => "required|max_length[100]",
            ],
            [
                "cont_Nombre"       => [
                    "required"      => 'Campo de Nombre es obligatorio',
                ],
                "cont_Apellido"     => [
                    "required"      => 'Campo de Apellido es obligatorio',
                ],
                "cont_Mensaje"      => [
                    "required"      => 'El campo mensaje es obligatorio',
                    "min_length"    => 'El campo de mensaje debe tener al menos 3 caracteres',
                    "max_length"    => 'El campo asunto debe tener como máximo 200 caracteres'
                ],
                "cont_Email"        => [
                    "required"      => 'Campo de correo electrónico obligatorio',
                    "valid_email"   => 'Debe ingresar una dirección de correo válida'
                ],
                "cont_Asunto"       => [
                    "required"      => 'Campo de asunto es obligatorio',
                    "max_length"    => 'El campo asunto debe tener como máximo 100 caracteres'
                ],
            ]
        );
        if($this->request->getMethod()=="post" && $reglasValidacion )
        {
            $datosPost = $this->request->getPost();
            $this->contacto->save($datosPost);
            return redirect()->to(base_url().'/contacto')->with('alertaExitosa', 'Su consulta se envió exitosamente!');

        }else
        {
            $dato['validation'] = $this->validator->getErrors();

            $data = ["titulo" => "Sneaker Society - Contactos"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("pagina_contacto", $dato);
            echo view("vista_footer");
        }
    }
    // Listar las consultas
    public function listarConsultas()
    {
        $datosContacto['titulo']            = "Lista de Contactos";
        $datosContacto['contacto']          = $this->contacto->findAll();
        $datosContacto['titulo_Leidos']     = "Mensajes Leidos";
        $datosContacto['contacto_Leidas']   = $this->contacto->onlyDeleted()->findAll();

        if($datosContacto['contacto'] == null && $datosContacto['contacto_Leidas'] != null)
        {
            $datosConsul['titulo']              = "Lista de Contactos";
            $datosConsul['titulo_Leidos']       = "Mensajes Leidos";
            $datosConsul['contacto_Leidas']     = $this->contacto->onlyDeleted()->findAll();

            $data = ["titulo" => "Sneaker Society - Contactos"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Consulta/Tabla_Contacto", $datosConsul);
            echo view("vista_footer");

        }else if($datosContacto['contacto'] != null && $datosContacto['contacto_Leidas'] == null)
        {
            $datosConsul['titulo']          = "Lista de Contactos";
            $datosConsul['contacto']        = $this->contacto->findAll();
            $datosConsul['titulo_Leidos']   = "Mensajes Leidos";    

            $data = ["titulo" => "Sneaker Society - Contactos"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Consulta/Tabla_Contacto", $datosConsul);
            echo view("vista_footer");
        }else
        {
            $data = ["titulo" => "Sneaker Society - Contactos"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Consulta/Tabla_Contacto", $datosContacto);
            echo view("vista_footer");
        }
    }
    // Se borra logicamente las consultas que se leyeron
    public function consultaVerificada($id = null)
    {
        $this->contacto->delete($id);
        return redirect()->to(base_url('').'/administrador/listarContacto')->with('alertaExitosa', 'Consulta verificada exitosamente!');
    }
}