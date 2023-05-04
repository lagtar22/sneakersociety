<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_categoria;
class Categoria extends Controller
{
    protected $categorias;
    protected $reglasVal;
    
    public function __construct()
    {
        $this->categorias = new Model_categoria();
        helper(['form']);
    }
    // Se listan todas las categorias registradas
    public function listarCategoria()
    {
        $datosCategoria['categorias'] = $this->categorias->findAll();
        $datosCategoria['titulo'] = "Categorías";

        $data = ["titulo" => "Sneaker Society - Categorías"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Categoria/Categoria_tabla", $datosCategoria);
        echo view("vista_footer");
    }
    // Se muestran las vistas de cargar nuevas categorias
    public function nuevaCategoria()
    {
        $datos['titulo'] = "Agregar Categoría";
        $data = ["titulo" => "Sneaker Society - Agregar"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Categoria/AgregarCategoria", $datos);
        echo view("vista_footer");
    }
    // Se guarda una nueva categoria
    public function cargarNuevaCategoria()
    { 
        if($this->request->getMethod()=="post")
        {
            $datosPost = $this->request->getPost();
            if($this->categorias->save($datosPost))
            {
                return redirect()->to(base_url().'/administrador/categorias')->with('alertaExitosa', 'Categoria agregada exitosamente!');
            }else
            {  
                $dato['titulo'] = "Agregar Categoría";
                $dato['validation'] = $this->categorias->errors();
        
                $data = ["titulo" => "Sneaker Society - Agregar"];
                echo view("vista_head", $data);
                echo view("vista_nav");
                echo view("Categoria/AgregarCategoria", $dato);
                echo view("vista_footer");
            }
        }
    }
    // Se muetran las vistas correspondientes para modificar las categorias
    public function editarCategoria($id = null)
    {
        $datosCategoria['categoria'] = $this->categorias->where('id', $id)->first();
        $datosCategoria['titulo'] = "Editar Categoría";

        $data = ["titulo" => "Sneaker Society - Editar"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Categoria/EditarCategoria", $datosCategoria);
        echo view("vista_footer");
    }
    // Se actualizan las categorias, si se verifica las validaciones
    public function actualizarCategoria()
    {
        // Se obtiene la clave unica --> "id"
        $datosActuales = $this->request->getVar('id');
        // Se guarda el conjunto de datos recibidos
        $nuevosDatos = $this->request->getPost();
        // Se actualiza el registro
        $datosCategoria['categoria'] = $this->categorias->where('id', $datosActuales)->first();
        if($this->categorias->update($datosActuales, $nuevosDatos))
        {
            return redirect()->to(base_url('').'/administrador/categorias')->with('alertaExitosa', 'Categoria modificada exitosamente!');
        }else
        {
            $datosCategoria['titulo'] = "Editar Categoría";
            $datosCategoria['validation'] = $this->categorias->errors();

            $data = ["titulo" => "Sneaker Society - Editar"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Categoria/EditarCategoria", $datosCategoria);
            echo view("vista_footer");
        }
    }
    // Se dan de alta las categorias
    public function darAltaCategoria($id = null)
    {
        $this->categorias->update($id, ["ct_Activo" => NULL]);
        return redirect()->to(base_url('').'/administrador/categorias')->with('alertaExitosa', 'Categoria dada de alta con éxito!');
    }
    // Se borran logicamente las categorias
    public function borrarCategoria($id = null)
    {
        //Se borra de manera logica la categoria
        $this->categorias->where('id', $id)->delete($id);
        // redirecciona a la tabla de categorias
        return redirect()->to(base_url('').'/administrador/categorias')->with('alertaExitosa', 'Categoria eliminada exitosamente!');;
    }

    // Se buscan las categorias eliminadas
    public function categoriasEliminadas()
    {
        $datosCategoria['categorias'] = $this->categorias->onlyDeleted()->findAll();
        $datosCategoria['titulo']= "Categorías Eliminadas";
        $datosCategoria['sub_titulo']= "Datos de Categorías Eliminadas";

        if($datosCategoria['categorias'] == null)
        {
            $datosCate['titulo']= "Categorias eliminadas";
            $datosCate['sub_titulo']= "Datos de Categorías Eliminadas";

            $data = ["titulo" => "Sneaker Society - Eliminadas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Categoria/Eliminados_Tabla", $datosCate);
            echo view("vista_footer");
        }else
        {
            $data = ["titulo" => "Sneaker Society - Eliminadas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Categoria/Eliminados_Tabla", $datosCategoria);
            echo view("vista_footer");
        }
    }
}