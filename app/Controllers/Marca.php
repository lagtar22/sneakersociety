<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Marca;

class Marca extends Controller
{
    protected $marca;
    protected $reglasVal;
    
    public function __construct()
    {
        $this->marca = new Model_Marca();
        helper(['form']);
        $this->reglasVal = ["marca_nombre" => "required"];
    }
    // Se lista las marcas
    public function listarMarca()
    {
        $datosMarca['marca'] = $this->marca->findAll();
        $datosMarca['titulo'] = "Marcas";
        $datosMarca['sub_titulo'] = 'Datos Marcas';

        $data = ["titulo" => "Sneaker Society - Marcas"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Marca/Marca_tabla", $datosMarca);
        echo view("vista_footer");
    }
    // Se cargan las vistas agregar marca
    public function nuevaMarca()
    {
        $datos['titulo'] = "Agregar Marca";

        $data = ["titulo" => "Sneaker Society - Agregar"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Marca/AgregarMarca", $datos);
        echo view("vista_footer");
    }
    // Se registra una marca
    public function cargarNuevaMarca()
    {
        /*Si el servidor utiliza el método post */
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            // En datos de usuario se carga el conjunto de datos enviados desde el formulario
            $post = $this->request->getPost();

            if($this->marca->save($post))
            {
                return redirect()->to(base_url().'/administrador/marca')->with('alertaExitosa', 'Marca añadida exitosamente!');
            }else
            {
                $dato['titulo'] = "Agregar Marca";
                $dato['validation'] = $this->marca->errors();

                $data = ["titulo" => "Sneaker Society - Agregar"];
                echo view("vista_head", $data);
                echo view("vista_nav");
                echo view("Marca/AgregarMarca", $dato);
                echo view("vista_footer");
            }
        }
    }
    // Se muestran las vistan correspondientes a modificar marca
    public function editarMarca($id=null)
    {
        $datosMarca['marca'] = $this->marca->where('marca_id', $id)->first();
        $datosMarca['titulo'] = 'Modificar Marca';
       
        $data = ["titulo" => "Sneaker Society - Modificar"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Marca/EditarMarca", $datosMarca);
        echo view("vista_footer");
    }
    // Se modifican las marcas
    public function actualizarMarca()
    {
        // Se obtiene la clave unica --> "id"
        $datosActuales = $this->request->getVar('marca_id');
        // Se actualiza el registro
        $nuevosDatos = $this->request->getPost();
        $marcaTab['marca'] = $this->marca->where('marca_id', $datosActuales)->first();

        if($this->marca->update($datosActuales, $nuevosDatos))
        {
            return redirect()->to(base_url('').'/administrador/marca')->with('alertaExitosa', 'Marca modificada exitosamente!');
        }else
        {
            $marcaTab['titulo'] = 'Modificar Marca';
            $marcaTab['validation'] = $this->marca->errors();

            $data = ["titulo" => "Sneaker Society - Modificar"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Marca/EditarMarca", $marcaTab);
            echo view("vista_footer");
        }
    }
    // Se eliminan logiacamente las marcas
    public function borrarMarca($id = null)
    {
        //Se borra de manera logica la categoria
        $this->marca->where('marca_id', $id)->delete($id);
        // redirecciona a la tabla de categorias
        return redirect()->to(base_url('').'/administrador/marca')->with('alertaExitosa', 'Marca eliminada exitosamente!');
    }
    // Se dan de alta las marcas 
    public function darAltaMarca($id = null)
    {
        $this->marca->update($id, ["marca_Activo" => NULL]);
        return redirect()->to(base_url('').'/administrador/marca')->with('alertaExitosa', 'Marca dada de alta con éxito!');
    }

    //Se buscan las marcas eliminadas 
    public function MarcaEliminadas()
    {
        $datosMarca['marca'] = $this->marca->onlyDeleted()->findAll();
        $datosMarca['titulo']= "Marcas Eliminadas";
        $datosMarca['sub_titulo']= "Datos de las Marcas Eliminadas";

        if($datosMarca['marca'] == null)
        {
            $datosMarc['titulo']= "Marcas Eliminadas";
            $datosMarc['sub_titulo']= "Datos de las Marcas Eliminadas";

            $data = ["titulo" => "Sneaker Society - Eliminadas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Marca/Eliminados_Tabla", $datosMarc);
            echo view("vista_footer");
        }else
        {
            $data = ["titulo" => "Sneaker Society - Eliminadas"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Marca/Eliminados_Tabla", $datosMarca);
            echo view("vista_footer");
        }
    }
}