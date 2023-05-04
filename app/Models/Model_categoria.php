<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_categoria extends Model{
    protected $table            = 'categoria';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['ct_Nombre', 'ct_Descripcion','ct_Activo'];
    protected $useSoftDeletes   = true;
    
    protected $useTimestamps    = true;
    protected $createdField     = 'fecha_creacion';
    protected $updatedField     = 'fecha_modif';
    protected $deletedField     = 'ct_Activo';

    protected $validationRules  = [
        "ct_Nombre"         => "required|min_length[3]|max_length[50]",
        "ct_Descripcion"    => "required|max_length[200]"
    ];  

    //Se generan las mensajes de validación
    protected $validationMessages = [
        "ct_Nombre"         => [
            "required"      => 'Campo de nombre obligatorio',
            "min_length"    => 'El campo nombre debe tener al menos 3 caracteres',
            "max_length"    => 'El campo nombre debe tener máximo 50 caracteres'
        ],
        "ct_Descripcion"    => [
            "required"      => 'El campo de descripción es obligatorio',
            "max_length"    => 'El campo de descripción debe tener máximo 200 caracteres'
        ]
    ];

    public function obtenerCategorias($buscar = null)
    {
        if ($buscar) {
            $this->where('ct_Nombre LIKE', "%$buscar%");
        }
        return $this->findAll();
    }
}