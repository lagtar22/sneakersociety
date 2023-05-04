<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Producto;
use App\Models\Model_categoria;
use App\Models\Model_Marca;
use App\Models\Model_VentaCabecera;
use App\Models\Model_VentasDetalles;

class Carrito extends Controller
{
    protected $productos;
    protected $categorias;
    protected $marca;
    protected $venta_Cabecera;
    protected $venta_Detalle;
    
    // Constructor de la clase Carrito
    public function __construct()
    {
        $this->productos        = new Model_Producto();
        $this->categorias       = new Model_categoria();
        $this->marca          = new Model_Marca();
        $this->venta_Cabecera   = new Model_VentaCabecera();
        $this->venta_Detalle    = new Model_VentasDetalles();
    }
    // Se agrega un producto al carrito
    public function agregarCarrito()
    {
        $session    = session();
        $id         = $this->request->getVar('pd_id');
        $stock      = $this->request->getVar('pd_Cantidad');

        if(!$session->get('carrito_v'))
        {
            $carrito[] = array(
                'id_producto'   => $id,
                'cantidad'      => 1,
                'stock'         => $stock,
            );
            $session->set('carrito_v', $carrito);
        }else
        {
            $almacenar      = false;
            $carrito_Act    = $session->get('carrito_v');
            foreach($carrito_Act as &$productos)
            {
                if($productos['id_producto'] == $id)
                {
                    $almacenar  = true;
                    
                    if($productos['stock'] > ($productos['cantidad']))
                    {
                        $productos['cantidad']++;
                        break;
                    }
                }
            }
            if($almacenar)
            {
                $session->set('carrito_v', $carrito_Act);
                return redirect()->to(base_url('').'/cliente/listarCatalogo');
            }else
            {
                $carrito_Act[]  = array(
                    'id_producto'   => $id,
                    'cantidad'      => 1,
                    'stock'         => $stock,
                );
                $session->set('carrito_v', $carrito_Act);
                return redirect()->to(base_url('').'/cliente/listarCatalogo');
            }
        }
    }
    // Se visualza el carrito
    public function ver_Carrito()
    {
        $session = session();
        $carrito = $session->get('carrito_v');
        if($carrito)
        {
            $id_productos = [];
            usort( $carrito, array($this, "ordena"));
            
            foreach( $carrito as $productos)
            {
                $id_productos[] = $productos['id_producto'];
            } 
            $datosProductos['productos'] = $this->productos->find($id_productos);
        }
        $datosProductos['marcas']     = $this->categorias->findAll();
        $datosProductos['categoria']    = $this->marca->findAll();
        $datosProductos['cantidad']     = $carrito;
        $datosProductos['titulo']       = "Carrito";
        $datosProductos['carrito']      = "true";

        $data['titulo']  = "Sneaker Society - Carrito";
        echo view("vista_head", $data);
        echo view("vista_nav", $datosProductos);
        echo view("carrito/verCarrito", $datosProductos);
        echo view("vista_footer");
    }
    // Funcion para orden el carrito según el id
    private function ordena($a, $b)
    {
        return ($a['id_producto'] < $b['id_producto']) ? -1 : 1;
    }
    // Se borra un producto colocado en el carrito
    public function borrarProductoUnitario()
    {
        $session    = session();
        $carrito    = $session->get('carrito_v');
        $id         = $this->request->getPost('pd_id');
        for($i=0; $i < sizeof($carrito); $i++)
        {
            if($carrito[$i]['id_producto'] == $id)
            {
                array_splice($carrito, $i, 1);
                break;   
            }
        }
        $session->set("carrito_v",$carrito);
        return redirect()->to(base_url('').'/cliente/Carrito')->with('alertaExitosa', 'Se elimino el producto!');
    }

    public function borrarCarrito()
    {
        $session = session();
        $carrito_Act = $session->get('carrito_v');

        $session->remove('carrito_v', $carrito_Act);
        return redirect()->to(base_url('').'/cliente/Carrito')->with('alertaExitosa', 'Se ha vaciado el carrito!');
    }
    // Se realiza la compra, y se guarda el detalle y cabecera de la venta 
    public function comprar()
    {
        $session        = session();
        $carritoAct     = $session->get('carrito_v');
        $id_productos   = [];
        $monto          = 0;

        usort( $carritoAct, array($this, "ordena"));

        foreach( $carritoAct as $productos)
        {
            $id_productos[] = $productos['id_producto'];
        } 

        $datosProductos= $this->productos->find($id_productos);

        for($i=0; $i < sizeof($carritoAct); $i++)
        {
            $monto += $carritoAct[$i]['cantidad']*$datosProductos[$i]['pd_PrecioVenta'];
        }
        $datos =
            [
                "id_Cliente"    => $session->get("us_id"),
                "totalVenta"    => $monto,
            ];
        $facturaAsociada=$this->venta_Cabecera->insert($datos);
        for($i=0; $i < sizeof($carritoAct); $i++)
        {
            $datosDetalle =
                [
                    "id_VentaCabec" => $facturaAsociada,
                    "pd_id"         => $carritoAct[$i]['id_producto'],
                    "cantidad"      => $carritoAct[$i]['cantidad'],
                    "precio"        => $datosProductos[$i]['pd_PrecioVenta'],
                ];
            $this->venta_Detalle->save($datosDetalle);
            $this->productos->update($carritoAct[$i]['id_producto'], array("pd_Cantidad"=>$carritoAct[$i]['stock']-$carritoAct[$i]['cantidad']));
        }
        $session->remove('carrito_v', $carritoAct);
        return redirect()->to(base_url('').'/cliente/Carrito')->with('alertaExitosa', 'Su compra se ha realizado con éxito!');
    }
}