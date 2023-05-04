<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User_Registro;
class Controlador_User extends Controller
{
    protected $user;

    public function __construct()
    {
        helper('form');
        $this->user = new User_Registro();
    }
    // Se carga la vista para cargar un usuario
    public function crearRegistro()
    {
        // Se muestra la vista del formulario del registro
        $dato['titulo'] = 'Registrar Usuario';
        
        $data = ["titulo" => "Sneaker Society - Registro"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Usuarios/Registrarse", $dato);
        echo view("vista_footer");
    }
    // Se verifica los datos cargados en el registro y si cumple con la verificacion, se guarda
    public function cargarRegistro()
    {
        /*Si el servidor utiliza el método post */
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // En datos de usuario se carga el conjunto de datos enviados desde el formulario
            $post = $this->request->getPost();
            if($post['us_Password'] != '')
            {
                $post['us_Password']    = password_hash($post['us_Password'], PASSWORD_BCRYPT); 
            }

            if($this->user->save($post))
            {
                return redirect()->to(base_url('').'/registro')->with('alertaExitosa', 'Registro exitoso');
            }else
            {
                $datos['validation']    = $this->user->errors();
                $datos['titulo']        = 'Registrar Usuario';

                $data = ["titulo" => "Sneaker Society - Registro"];
                echo view("vista_head", $data);
                echo view("vista_nav");
                echo view("Usuarios/Registrarse", $datos);
                echo view("vista_footer");
            }
        }
    }
    // Se lista los usuarios registrados
    public function listadoUsuarios()
    {
        $usuariosTab['usuarios'] = $this->user->getUsuariosActivos();
        $usuariosTab['titulo'] = 'Usuarios Registrados';
        $usuariosTab['sub_titulo'] = 'Datos Usuarios';

        $data = ["titulo" => "Sneaker Society - Usuarios"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Usuarios/tablaUsers", $usuariosTab);
        echo view("vista_footer");
    }

    public function buscarUsuarios()
    {
        //echo '<pre> HOLA MUNDO1';
        //echo '</pre>';

        $term = $this->request->getPost('term');

        //echo '<pre> HOLA MUNDO2';
        //echo '</pre>';

        $usuariosTab['usuarios'] = $this->user->buscarUsuarios($term);

        //echo '<pre> HOLA MUNDO3';
        //echo '</pre>';

        $usuariosTab['titulo'] = 'Usuarios Registrados';
        $usuariosTab['sub_titulo'] = 'Datos Usuarios';

        $data = ["titulo" => "Sneaker Society - Usuarios"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Usuarios/tablaUsers", $usuariosTab);
        echo view("vista_footer");
    }
    // Se buscan los datos del cliente
    public function datos_User()
    {
        $usuariosTab['usuario'] = $this->user->where('id',session()->us_id)->findAll();
        $usuariosTab['titulo'] = 'Datos del Perfil';

        $data = ["titulo" => "Sneaker Society - Perfil"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Usuarios/Datos_usuario", $usuariosTab);
        echo view("vista_footer");
    }
    // Se busca los datos del administrador
    public function datos_admin()
    {
        $usuariosTab['usuario'] = $this->user->where('id',session()->us_id)->findAll();
        $usuariosTab['titulo']  = 'Datos del perfil';

        $data = ["titulo" => "Sneaker Society - Perfil"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Usuarios/Datos_admin", $usuariosTab);
        echo view("vista_footer");
    }
    // Se realiza la eliminación lógica del usuario
    public function borrar($id = null)
    {
        $this->user->where('id', $id)->delete($id);
        // Se redireccion a la tabla de consulta de los usuarios
        return redirect()->to(base_url('').'/administrador/usuarios/consultar')->with('alertaExitosa', 'Usuario Eliminado con Exito!');
    }
    // Al usuario eliminado logicamente, se le da de alta
    public function alta($id = null)
    {
        $this->user->update($id, ['us_Baja' => NULL]);
    // Se redireccion a la tabla de consulta de los usuarios
        return redirect()->to(base_url('').'/administrador/usuarios/consultar')->with('alertaExitosa', 'Usuario Reincorporado!');
    }
    // Se busca el registro del usuario asociado y se lo envía a la vista
    public function editar($id = null)
    {
        $datosUser['usuario']   = $this->user->where('id', $id)->first();
        $datosUser['titulo']    = 'Modificar Usuario';
       
        $data = ["titulo" => "Sneaker Society - Modificar"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Usuarios/ModificarUsuario", $datosUser);
        echo view("vista_footer");
    }
    // Se medifica los campos del usuario
    public function actualizarAdmin()
    { 
        $datosActuales = $this->request->getVar('id');
        $nuevosDatos = $this->request->getPost();
        $usuariosTab['usuario'] = $this->user->where('id', $datosActuales)->first();

        if($this->user->update($datosActuales, $nuevosDatos))
        {
            return redirect()->to(base_url('').'/administrador/usuarios/datos')->with('alertaExitosa', 'Modifiación Exitosa!');
        }else
        {
            $usuariosTab['titulo'] = 'Modificar Usuario';
            $usuariosTab['validation'] = $this->user->errors();

            $data = ["titulo" => "Sneaker Society - Modificar"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Usuarios/ModificarUsuario", $usuariosTab);
            echo view("vista_footer");
        }
    }

    public function actualizarCliente()
    { 
        $datosActuales = $this->request->getVar('id');
        $nuevosDatos = $this->request->getPost();
        $usuariosTab['usuario'] = $this->user->where('id', $datosActuales)->first();

        if($this->user->update($datosActuales, $nuevosDatos))
        {
            return redirect()->to(base_url('').'/cliente/datosUsuario')->with('alertaExitosa', 'Modifiación Exitosa!');
        }else
        {
            $usuariosTab['titulo']      = 'Modificar Usuario';
            $usuariosTab['validation']  = $this->user->errors();

            $data = ["titulo" => "Sneaker Society - Modificar"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Usuarios/ModificarUsuario", $usuariosTab);
            echo view("vista_footer");
        }
    }
    // Se buscan los usuarios eliminados
    public function usuariosEliminadas()
    {
        $datosUsuarios['titulo'] = 'Usuarios Eliminados';
        $datosUsuarios['sub_titulo'] = 'Datos usuarios';
        $datosUsuarios['usuario'] = $this->user->onlyDeleted()->findAll();

        if($datosUsuarios['usuario'] == null)
        {
            $datosUser['sub_titulo']    = 'Datos usuarios';
            $datosUser['titulo']        = 'Usuarios Eliminados';

            $data = ["titulo" => "Sneaker Society - Eliminados"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Usuarios/tabla_Eliminados", $datosUser);
            echo view("vista_footer");
        }else
        {
            $data = ["titulo" => "Sneaker Society - Eliminados"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Usuarios/tabla_Eliminados", $datosUsuarios);
            echo view("vista_footer");
        }
    }
    // Se cargan las vistas inicio de sesion
    public function login()
    {
        $data = ["titulo" => "Sneaker Society - Iniciar Sesión"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Sesión/login");
        echo view("vista_footer");
    }
    // Se verifica los datos ingresados para iniciar, si cumple la verificación inicia sesión
    public function inicioSesion()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {

            $critValidacion= $this->validate(
                [
                    "us_User"       => "required",
                    "us_Password"   => "required"
                ],
                [
                    "us_User"       => [
                        "required"  => 'Campo de usuario obligatorio',
                    ],
                    "us_Password"   => [
                        "required"  => 'Campo de contraseña obligatorio',
                    ]   
                ]
            );
            if($critValidacion)
            {
                $datosUser = $this->user->where('us_User',$_POST['us_User'])->first();

                if($datosUser != null)
                {
                    if(password_verify($_POST['us_Password'], $datosUser['us_Password']))
                    {
                        session()->set(
                            [
                                'us_id'         => $datosUser['id'],
                                'us_User'       => $datosUser['us_User'],
                                'us_Perfil_id'  => $datosUser['us_Perfil_id'],
                                'us_Name'       => $datosUser['us_Name'],
                                'us_Apellido'   => $datosUser['us_Apellido'],
                                'us_Email'      => $datosUser['us_Email'],
                                'is_logged'     => true
                            ]
                        );
                        return redirect()->to(base_url('').'/')->with('alertaExitosa', 'Inicio de sesión exitoso!');
                    }else
                    {
                        $datos['errores']   = "Contraseña incorrecta";
                    }
                }else
                {
                    $datos['errores']   = "Usuario incorrecto";
                }
            }else
            {
                $datos["validation"]    = $this->validator->getErrors();
            }
            $data = ["titulo" => "Sneaker Society - Iniciar Sesión"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Sesión/login", $datos);
            echo view("vista_footer");
        }
    }
    // Se cierra la sesión
    public function cerrarSesion()
    {
        session()->destroy();
        return redirect()->to(base_url('').'/');
    }
}