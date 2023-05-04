<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Consulta;
class Consulta extends Controller
{
    protected $consultas;
    
    public function __construct()
    {
        $this->consultas = new Model_Consulta();
        helper (['form']);
    }
    // Se guarda el mensaje que se envía 
    public function cargarMensaje()
    {
        $reglasValidacion = $this->validate(
            [
                "con_Nombre"    => "required",
                "con_Apellido"  => "required",
                "con_Mensaje"   => "required|min_length[3]|max_length[200]",
                "con_Email"     => "required|valid_email",
                "con_Asunto"    => "required|max_length[100]",
            ],
            [
                "con_Nombre"        => [
                    "required"      => 'Campo de Nombre es obligatorio',
                ],
                "con_Apellido"      => [
                    "required"      => 'Campo de Apellido es obligatorio',
                ],
                "con_Mensaje"       => [
                    "required"      => 'El campo mensaje es obligatorio',
                    "min_length"    => 'El campo de mensaje debe tener al menos 3 caracteres',
                    "max_length"    => 'El campo asunto debe tener como máximo 200 caracteres'
                ],
                "con_Email"         => [
                    "required"      => 'Campo de correo electrónico obligatorio',
                    "valid_email"   => 'Debe ingresar una dirección de correo válida'
                ],
                "con_Asunto"        => [
                    "required"      => 'Campo de asunto es obligatorio',
                    "max_length"    => 'El campo asunto debe tener como máximo 100 caracteres'
                ],
            ]
        );

        if($this->request->getMethod()=="post" && $reglasValidacion)
        {
            $datosPost = $this->request->getPost();
            $this->consultas->save($datosPost);
            return redirect()->to(base_url().'/contacto')->with('alertaExitosa', 'Su consulta ha sido enviada con éxito!');
        }else
        {
            $dato['validation'] = $this->validator->getErrors();

            $data = ["titulo" => "Sneaker Society - Consultas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("pagina_contacto", $dato);
            echo view("vista_footer");
        }
    }
    // Se buscan las consultas realizadas
    public function listarConsultas()
    {
        $datosConsulta['titulo']            = "Lista de Consultas";
        $datosConsulta['titulo_Leidos']     = "Mensajes Leidos";
        $datosConsulta['consultas']         = $this->consultas->findAll();
        $datosConsulta['consultas_Leidas']  = $this->consultas->onlyDeleted()->findAll();
        
        if($datosConsulta['consultas'] == null && $datosConsulta['consultas_Leidas'] !=null)
        {
            $datosConsul['titulo']              = "Lista de Consultas";
            $datosConsul['titulo_Leidos']       = "Mensajes Leidos";
            $datosConsul['consultas_Leidas']    = $this->consultas->onlyDeleted()->findAll();

            $data = ["titulo" => "Sneaker Society - Consultas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Consulta/Tabla_Consultas", $datosConsul);
            echo view("vista_footer");
        }else if($datosConsulta['consultas'] != null && $datosConsulta['consultas_Leidas'] == null)
        {
            $datosConsul['titulo']          = "Lista de Consultas";
            $datosConsul['titulo_Leidos']   = "Mensajes Leidos";
            $datosConsul['consultas']       = $this->consultas->findAll();

            $data = ["titulo" => "Sneaker Society - Consultas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Consulta/Tabla_Consultas", $datosConsul);
            echo view("vista_footer");
        }else
        {
            $datosConsul['titulo']              = "Lista de Consultas";
            $datosConsul['titulo_Leidos']       = "Mensajes Leidos";
            $datosConsul['consultas']           = $this->consultas->findAll();
            $datosConsul['consultas_Leidas']    = $this->consultas->onlyDeleted()->findAll();

            $data = ["titulo" => "Sneaker Society - Consultas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Consulta/Tabla_Consultas", $datosConsul);
            echo view("vista_footer");
        }
    }
    // Se borra logicamente al leer la consulta
    public function consultaVerificada($id = null)
    {
        $this->consultas->delete($id);
        return redirect()->to(base_url('').'/administrador/listarConsultas')->with('alertaExitosa', 'Consulta Leída!');
    }

}