<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_Consulta extends Model{
    protected $table            = 'consulta';
    protected $primaryKey       = 'id_Consulta';
    protected $allowedFields    = ['con_Nombre', 'con_Apellido', 'con_Mensaje', 'con_Email', 'con_Asunto'];
    protected $useSoftDeletes   = true;

    protected $useTimestamps    = true;
    protected $createdField     = 'fecha_creacion';
    protected $updatedField     = 'fecha_modif';
    protected $deletedField     = 'con_baja';
}