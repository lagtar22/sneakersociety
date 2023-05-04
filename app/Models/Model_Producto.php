<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_Producto extends Model{
    protected $table            = 'productos';
    protected $primaryKey       = 'pd_id';
    protected $allowedFields    = ['ct_id', "marca_id", 'pd_Nombre', 'pd_Descripcion', 'pd_PrecioVenta', 'pd_Cantidad', "pd_Imagen", "pd_Activo"];

    protected $useSoftDeletes   = true;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $useTimestamps    = false;
    protected $createdField     = 'fecha_creacion';
    protected $updatedField     = 'fecha_modif';
    protected $deletedField     = 'pd_Activo';

    protected $validationRules  = [
        "ct_id"             => "required",
        "marca_id"          => "required",
        "pd_Nombre"         => "required|min_length[3]",
        "pd_Descripcion"    => "required|max_length[250]",
        "pd_PrecioVenta"    => "required",
        "pd_Cantidad"       => "required",
        "pd_Imagen"         => "is_image[pd_Imagen]|max_size[pd_Imagen,4096]",
    ]; 

    protected $validationMessages = [
        "ct_id"             => [
            "required"      => 'Campo de categoria es obligatorio',
        ],
        "marca_id"          => [
            "required"      => 'Campo de Marca es obligatorio',
        ],
        "pd_Nombre"         => [
            "required"      => 'Campo de nombre del producto es obligatorio',
            "min_length"    => 'El campo nombre del producto debe tener al menos 3 caracteres'
        ],
        "pd_Descripcion"    => [
            "required"      => 'Campo de descripción es obligatorio',
            "max_length"    => 'El campo descripción debe tener como máximo 250 caracteres'
        ],
        "pd_PrecioVenta"    => [
            "required"      => 'Campo de precio de venta es obligatorio',
        ],
        "pd_Cantidad"       => [
            "required"      => 'El campo de cantidad es obligatorio',
        ],
        "pd_Imagen"         => [
            "is_image"      => 'Se debe ingresar una imagen jpg/png',
            "max_size"      => 'El máximo tamaño es de 4096'
        ]
    ];

    public function desvalidarImagen(){
        unset($this->validationRules["pd_Imagen"]);
    }
    public function getAllProductosByCategoria($categoria)
    {
        return $this->where('ct_id', $categoria)->findAll();
    }
    public function buscarProductos($buscar = null)
    {
        $sql = "SELECT p.*, c.ct_Nombre, e.marca_nombre FROM productos p
                    INNER JOIN categoria c ON p.ct_id = c.id 
                    INNER JOIN marca e ON p.marca_id = e.marca_id";
        
        if ($buscar)
        {
            $sql .= " WHERE p.pd_Nombre LIKE '%".$buscar."%' OR c.ct_Nombre LIKE '%".$buscar."%' OR e.marca_nombre LIKE '%".$buscar."%'";
        }
        
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    public function obtenerProductosActivos()
    {
        $sql = "SELECT p.*, c.ct_Nombre, e.marca_nombre FROM productos p
                    INNER JOIN categoria c ON p.ct_id = c.id 
                    INNER JOIN marca e ON p.marca_id = e.marca_id
                    WHERE pd_Activo IS NULL";
        
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
}