<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_Marca extends Model{
    protected $table            = 'marca';
    protected $primaryKey       = 'marca_id';
    protected $allowedFields    = ['marca_nombre', 'marca_Activo'];
    protected $useSoftDeletes   = true;
    
    
    protected $useTimestamps    = true;
    protected $createdField     = 'fecha_creacion';
    protected $updatedField     = 'fecha_modif';
    protected $deletedField     = 'marca_Activo';

    protected $validationRules = [
        "marca_nombre"    => "required|min_length[3]|max_length[50]",
    ];  

    //Se generan las mensajes de validación
    protected $validationMessages = [
        "marca_nombre"    => [
            "required"      => 'Campo de nombre obligatorio',
            "min_length"    => 'El campo nombre debe tener al menos 3 caracteres',
            "max_length"    => 'El campo nombre debe tener máximo 50 caracteres'
        ]
    ];

    public function obtenerMarcas($buscar = null)
    {
        if ($buscar) {
            $this->where('marca_nombre LIKE', "%$buscar%");
        }
        return $this->findAll();
    }
}