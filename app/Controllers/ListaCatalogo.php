<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Producto;
use App\Models\Model_categoria;

class ListaCatalogo extends Controller
{
    protected $productos;
    protected $categorias;
    
    // Constructor de la clase ListaCatalogo
    public function __construct()
    {
        $this->productos    = new Model_Producto();
        $this->categorias   = new Model_categoria();
    }

    // Se listan los productos registrados/guardados en la base de datos
    public function listarProductos()
    {
        $datosProductos['productos'] = $this->productos->findAll();
        $datosProductos['categorias'] = $this->categorias->findAll();
        $datosProductos['titulo'] = "Producto";

        $data['titulo'] = "Sneaker Society - Catálogo";
        $mainContent = view("catalogo/listaCatalogo", $datosProductos, ['returnType' => 'string']);
        return $this->_cargarVistasComunes($mainContent, $data);
    }

    // Se buscan los productos en relación a la categoria de las mismas
    public function filtrarProducto()
    {    
        $id_categoria = $this->request->getPost("ct_id");

        if($id_categoria == ""){
            $datosProductos['productos'] = $this->productos->findAll();
            $datosProductos['categorias'] = $this->categorias->findAll();
            $datosProductos['titulo'] = "Producto";
        }else{
            $datosProductos['productos'] = $this->productos->like("ct_id", $id_categoria)->findAll();
            $datosProductos['categorias'] = $this->categorias->findAll();
            $datosProductos['titulo'] = "Producto";
        }  

        $data['titulo'] = "Sneaker Society - Catálogo";
        $mainContent = view("catalogo/listaCatalogo", $datosProductos, ['returnType' => 'string']);
        return $this->_cargarVistasComunes($mainContent, $data);
    }

    // Función que carga las vistas comunes
    private function _cargarVistasComunes($mainContent, $data = [])
    {
        $defaultData = [
            'titulo' => "Sneaker Society"
        ];
        $data = array_merge($defaultData, $data);

        echo view("vista_head", $data);
        echo view("vista_nav");
        echo $mainContent;
        echo view("vista_footer");
    }
}