<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_VentaCabecera extends Model{
    protected $table            = 'ventas_cabeceras';
    
    protected $primaryKey       = 'id_VentaCabec';
    protected $allowedFields    = ['id_Cliente', 'totalVenta', 'fecha_Guardado'];

    public function get_ventas_cabeceras()
    {
        $query = $this->db->table('ventas_cabeceras');
        $query->select('ventas_cabeceras.*, usuarios.us_Name, usuarios.us_Apellido, usuarios.us_Email');
        $query->join('usuarios', 'usuarios.id = ventas_cabeceras.id_Cliente');
        $query->orderBy('ventas_cabeceras.fecha_Guardado', 'ASC'); // Ordenar por fecha de forma ascendente
        return $query->get()->getResultArray();
    }
    public function get_ventas_por_fecha($fecha_inicio, $fecha_fin)
    {
        $query = $this->db->table('ventas_cabeceras');
        $query->select('ventas_cabeceras.*, usuarios.us_Name, usuarios.us_Apellido, usuarios.us_Email');
        $query->join('usuarios', 'usuarios.id = ventas_cabeceras.id_Cliente');
        $query->where('ventas_cabeceras.fecha_Guardado >=', $fecha_inicio);
        $query->where('ventas_cabeceras.fecha_Guardado <=', $fecha_fin);
        $query->orderBy('ventas_cabeceras.fecha_Guardado', 'ASC'); // Ordenar por fecha de forma ascendente
        return $query->get()->getResultArray();
    }
}