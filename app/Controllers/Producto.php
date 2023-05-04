<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Producto;
use App\Models\Model_categoria;
use App\Models\Model_Marca;

class Producto extends Controller
{
    protected $productos;
    protected $categorias;
    protected $marca;
    
    public function __construct()
    {
        $this->productos = new Model_Producto();
        $this->categorias = new Model_categoria();
        $this->marca = new Model_Marca();
        helper(['form', 'url']);
    }
    // Listar productos
    public function listarProductos()
    {
        $productos['productos'] = $this->productos->obtenerProductosActivos();
        $productos['titulo'] = "Lista de Productos";

        $data['titulo'] = "Sneaker Society - Productos";
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Productos/Productos_tabla", $productos);
        echo view("vista_footer");
    }
    public function buscarProductos()
    {
        $buscar = $this->request->getPost('buscar');
        $productos['productos'] = $this->productos->buscarProductos($buscar);
        $productos['titulo'] = "Lista de Productos";

        $data = ["titulo" => "Sneaker Society - Productos"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Productos/Productos_tabla", $productos);
        echo view("vista_footer");
    }
    // Nuevo producto
    public function nuevoProducto()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $post               = $this->request->getPost();
            $producto_model     = new Model_Producto();

            if($producto_model->save($post))
            {
                //si guardo retornar al panel
                return redirect()->to(base_url().'/administrador/productos')->with('alertaExitosa', 'Producto agregado exitosamente!');
            }
        }
        $datos['titulo']        = "Agregar Producto";
        $datos['categorias']    = $this->categorias->findAll();
        $datos['marcas']      = $this->marca->findAll();

        $data['titulo']         = "Sneaker Society - Agregar";
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Productos/AgregarProducto", $datos);
        echo view("vista_footer");
    }
    //Insertar producto
    public function cargarNuevoProducto()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $producto_model     = new Model_Producto();
            $img_nueva          = $this->request->getFile('pd_Imagen');
            $reglasValidacion   = $this->validate(
            [
                'ct_id'             => "required",
                'marca_id'        => "required",
                'pd_Nombre'         => "required",
                'pd_Descripcion'    => "required",
                'pd_PrecioVenta'    => "required",
                "pd_Cantidad"       => "required",
                'pd_Imagen'         => "uploaded[pd_Imagen]|max_size[pd_Imagen, 4096]|is_image[pd_Imagen]",
            ],
            [
                "ct_id"             => [
                    "required"      => 'Campo de categoria es obligatorio',
                ],
                "marca_id"        => [
                    "required"      => 'Campo de Marca es obligatorio',
                ],
                "pd_Nombre"         => [
                    "required"      => 'Campo de nombre del producto es obligatorio',
                ],
                "pd_Descripcion"    => [
                    "required"      => 'Campo de descripción es obligatorio',
                ],
                "pd_PrecioVenta"    => [
                    "required"      => 'Campo de precio de venta es obligatorio',
                ],
                "pd_Cantidad"       => [
                    "required"      => 'El campo de cantidad es obligatorio',
                ],
                "pd_Imagen"         => [
                    "uploaded"      => 'Debe ingresar una imagen.',
                    "max_size"      => 'Debe ingresar una imagen mas chica.',
                    "is_image"      => 'Debe ingresar una imagen jpg/png.'
                ]
            ]);
            
            if($reglasValidacion)
            {
                $datosPost              = $this->request->getPost();
                $nombre_img             = $img_nueva->getRandomName();
                $datosPost['pd_Imagen'] = $nombre_img;
                $producto_model->save($datosPost);
                $img_nueva->move(ROOTPATH . 'assets\img\Catalogo/', $nombre_img);

                return redirect()->to(base_url().'/administrador/productos')->with('alertaExitosa', 'Producto agregado exitosamente!');
            }else
            {
                $datos['titulo']        = "Agregar Producto";
                $datos['validation']    = $this->validator->getErrors();
                $datos['categorias']    = $this->categorias->findAll();
                $datos['marcas']      = $this->marca->findAll();

                $data['titulo']         = "Sneaker Society - Agregar";
                echo view("vista_head", $data);
                echo view("vista_nav");
                echo view("Productos/AgregarProducto", $datos);
                echo view("vista_footer");
            }
        }
    }
    // Editar producto
    public function editarProducto($id=null)
    {
        $datos['titulo']        = 'Editar Producto';
        $datos['producto']      = $this->productos->where('pd_id', $id)->first();
        $datos['categorias']    = $this->categorias->findAll();
        $datos['marcas']      = $this->marca->findAll();
        
        $data['titulo']         = "Sneaker Society - Editar";
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Productos/EditarProducto", $datos);
        echo view("vista_footer");
    }
    // Actualizar producto
    public function actualizarProducto()
    {
        // Se obtiene la clave unica --> "id"
        $datosActuales              = $this->request->getVar('pd_id');
        $datos                      = $this->productos->where('pd_id', $datosActuales)->first();
        // Se guarda el conjunto de datos recibidos
        $nuevosDatos                = $this->request->getPost();
        $nuevosDatos['pd_Imagen']   = $datos['pd_Imagen'];  

        $img_cargar                 = $this->request->getFile("pd_Imagen");
        
        if(!$img_cargar->isValid())
        {
            $this->productos->desvalidarImagen();
        }else
        {
            $modificarImagen            = \Config\Services::image();
            $nombreImg                  = $img_cargar->getRandomName();
            // move_uploaded_file($img_cargar, "assets\img\catalogo/" . $nombreImg);
            $datosPost['pd_Imagen']     = $nombreImg;
            $nuevosDatos['pd_Imagen']   = $nombreImg;
        }
        // Se actualiza el registro
        if($this->productos->update($this->request->getVar('pd_id'), $nuevosDatos))
        {
            if($img_cargar->isValid())
            {
                $img_cargar->move("assets\img\Catalogo/", $nombreImg);
                $modificarImagen->withFile("assets\img\Catalogo/" . $nombreImg)->fit(500,500)->save("assets\img\Catalogo/" . $nombreImg);  
            }
            return redirect()->to(base_url('').'/administrador/productos')->with('alertaExitosa', 'Producto Modificado exitosamente!');

        }else
        {
            $datos['titulo']        = 'Editar Producto';
            $datos['marcas']      = $this->marca->findAll();
            $datos['producto']      = $this->productos->where('pd_id', $datosActuales)->first();
            $datos['categorias']    = $this->categorias->findAll();
            $datos['validation']    = $this->productos->errors();
            
            $data['titulo']         = "Sneaker Society - Editar";
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("Productos/EditarProducto", $datos);
            echo view("vista_footer");
        }
    }
    // Borrar producto
    public function borrarProducto($id=null)
    {
        //Se borra de manera logica la categoria
        $this->productos->delete($id);
        // redirecciona a la tabla de productos
        return redirect()->to(base_url('').'/administrador/productos')->with('alertaExitosa', 'Producto Eliminado con Exito!');
    }
    // Se da de alta el producto eliminado logicamente
    public function darAltaProducto($id=null)
    {
        $this->productos->update($id, ["pd_Activo" => NULL]);
        return redirect()->to(base_url('').'/administrador/productos')->with('alertaExitosa', 'Producto Dado de Alta con Exito!');
    }
    // Se muestra los productos eliminados
    public function productosEliminadas()
    {
        $datosProducto['productos'] = $this->productos->onlyDeleted()->findAll();
        $datosProducto['titulo']    = "Productos Eliminados";

        $data['titulo']             = "Sneaker Society - Eliminados";
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("Productos/Eliminados_Tabla", $datosProducto);
        echo view("vista_footer");
    }
}