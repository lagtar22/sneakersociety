<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Producto;
use App\Models\Model_VentaCabecera;
use App\Models\Model_VentasDetalles;
use Dompdf\Dompdf;
use Dompdf\Options;

class RegistroVentas extends Controller
{
    protected $ventaCabecera;
    protected $ventaDetalle;
    protected $producto;

    // Constructor de la clase "RegistroVentas"
    public function __construct()
    {
        $this->ventaCabecera    = new Model_VentaCabecera();
        $this->ventaDetalle     = new Model_VentasDetalles();
        $this->producto         = new Model_Producto();
    }
    // Se muestra la cabecera de venta
    public function mostrarCabecera()
    {
        $session = session();
        $datosCompra['compraRealizada']     = $this->ventaCabecera->where('id_Cliente', $session->get('us_id'))->join("usuarios", "usuarios.id = ventas_cabeceras.id_Cliente")->findAll();
        $datosCompra['titulo']              = "Compras Realizadas";

        if($datosCompra['compraRealizada'] == null)
        {
            $datosComp['titulo']    = "Compras Realizadas";

            $data = ["titulo" => "Sneaker Society - Compras"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("ventas/tabla_ventasCLI", $datosComp);
            echo view("vista_footer");
        }else
        {
            $data = ["titulo" => "Sneaker Society - Compras"];
            echo view("vista_head", $data);
            echo view("vista_nav");
            echo view("ventas/tabla_ventasCLI", $datosCompra);
            echo view("vista_footer");
        }
    }
    // Se muestra el detalle de venta
    public function mostrarDetalle()
    {
        $id                                 = $_GET['id_compra'];
        $session                            = session();
        $detalleCompra['compraRealizada']   = $this->ventaCabecera->where('id_VentaCabec', $id)->join("usuarios", "usuarios.id = ventas_cabeceras.id_Cliente")->findAll();

        if($session->get('us_Perfil_id') == 2)
        {
            $detalleCompra['titulo1']   = 'Detalle de Compra';
        }else if($session->get('us_Perfil_id') == 1)
        {
            $detalleCompra['titulo1']   = 'Detalle de Venta';
        }

        $detalleCompra['titulo2']           = 'Detalles';
        $detalleCompra['detalle_compra']    = $this->ventaDetalle->where('id_VentaCabec', $id)->join('productos','productos.pd_id = ventas_detalles.pd_id')->findAll();
        
        $data   = ["titulo" => "Sneaker Society - Detalles"];
        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("ventas/tabla_detalles", $detalleCompra);
        echo view("vista_footer");
    }
    // Se muestra la cabecera de venta al administrador
    public function ventas_Cabeceras_admin()
    {
        $data = ["titulo" => "Sneaker Society - Ventas"];
        $ventas = $this->ventaCabecera->get_ventas_cabeceras();

        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("ventas/tabla_ventasADM", ['ventas' => $ventas]);
        echo view("vista_footer");
    }
    public function buscarVentasPorFecha()
    {
        $data = ["titulo" => "Sneaker Society - Ventas"];
        $ventas = [];
        // Si el formulario fue enviado, se obtienen las fechas y se buscan las ventas por fecha
        if ($this->request->getMethod(true) == 'POST') {
            $fechaInicio = $this->request->getPost('fecha_inicio');
            $fechaFin = $this->request->getPost('fecha_fin');

            // Validar que la fecha de inicio sea menor o igual a la fecha de fin
            if ($fechaInicio > $fechaFin) {
                $error = "La fecha de inicio debe ser menor o igual a la fecha de fin";
                // Aquí podrías mostrar el mensaje de error al usuario
            } else {
                // Llamar a la función del modelo para buscar las ventas por fecha
                $ventas = $this->ventaCabecera->get_ventas_por_fecha($fechaInicio, $fechaFin);
            }
        }

        echo view("vista_head", $data);
        echo view("vista_nav");
        echo view("ventas/tabla_ventasADM", ['ventas' => $ventas]);
        echo view("vista_footer");
    }
    //se crea una factura para descargar
    public function descargarFactura( $id = null )
    {
        $options    = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

        $compraRealizada   = $this->ventaCabecera->where('id_VentaCabec', $id)->join("usuarios", "usuarios.id = ventas_cabeceras.id_Cliente")->findAll();
        $detalle_compra    = $this->ventaDetalle->where('id_VentaCabec', $id)->join('productos','productos.pd_id = ventas_detalles.pd_id')->findAll();
        
        $ruta = base_url('assets/img/Logo/logo1.png');
        $tipo = pathinfo($ruta, PATHINFO_EXTENSION);
        $dato = file_get_contents($ruta);
        $imagen = 'data:image/'.$tipo.';base64,'.base64_encode($dato);

        $html = '<body>
                    <div>
                        <div style="text-align: left;">
                            <img src="'.$imagen.'" alt="" width="100" height="100">
                            <h2><b>SNEAKER SOCIETY SRL</b></h2>
                            <h3><b>César Augusto Schaffer Alippi</b></h3>
                            CUIT: 20-39864764-6<br> 
                            Río Juramento 1233<br>
                            3400, Corrientes<br>
                            Corrientes, Argentina<br>
                            TEL: 3772-514098<br>
                            sneakersociety@gmail.com
                        </div>
                        <div style="text-align: right;">';
        if($compraRealizada)
        {
            foreach($compraRealizada as $compra)
            {
                $html .= '<h3><b>'.$compra['us_Apellido'].', '.$compra['us_Name'].'</b></h3>';
                $html .= 'DNI: '.$compra['us_DNI'].'<br>';
                $html .= $compra['us_Direccion'].'<br>';
                $html .= $compra['us_Ciudad'].', '.$compra['us_Provincia'].'<br>';
                $html .= $compra['us_Email'].'<br>';
                $fecha = date( "d-m-Y", strtotime($compra['fecha_Guardado']) );
                $total = $compra['totalVenta'];
            }
        }
        $html .= '
                        </div>
                    </div>
                    <br><hr>
                    <h3><b>Factura: '.$id.'<br>Compra: '.$fecha.'</b></h3>
                    <div>
                        <table style="width: 100%; border-collapse: collapse; border: 1px solid text-align: left;">
                            <thead style="border: 1px solid">
                                <th style="border: 1px solid">Producto</th>
                                <th style="border: 1px solid">Cantidad</th>
                                <th style="border: 1px solid">Precio</th>
                                <th style="border: 1px solid">Subtotal</th>
                            </thead>
                            <tbody>';
        if($detalle_compra)
        {
            foreach($detalle_compra as $detalle)
            {
                $html .= '
                                <tr>
                                    <td style="border: 1px solid">&nbsp;'.$detalle['pd_Nombre'].'</td>
                                    <td style="border: 1px solid">&nbsp;'.$detalle['cantidad'].'</td>
                                    <td style="border: 1px solid">&nbsp;$ '.$detalle['precio'].'</td>
                                    <td style="border: 1px solid">&nbsp;$ '.$detalle['precio'] * $detalle['cantidad'].'</td>
                                </tr>';
            }
        }                   
        $html .= '
                            </tbody>
                        </table>
                        <hr>
                        <div style="text-align: right;">
                            <h3><b>Total Compra: </b>$ '.$total.'</h3>
                        </div>
                </div>
            </body>';

        $dompdf->loadHtml( $html );

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream("factura".$id."SneakerSociety_".$fecha."_".time().".pdf");
    }
}