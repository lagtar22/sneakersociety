<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_VentasDetalles extends Model{
    protected $table            = 'ventas_detalles';
    
    protected $primaryKey       = 'id_VentasDetalles';
    protected $allowedFields    = ['id_VentaCabec', 'pd_id', 'cantidad', 'precio'];
}