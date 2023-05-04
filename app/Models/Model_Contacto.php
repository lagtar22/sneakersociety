<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_Contacto extends Model{
    protected $table            = 'contacto';
    protected $primaryKey       = 'id_Contacto';
    protected $allowedFields    = ['cont_Nombre', 'cont_Apellido', 'cont_Mensaje', 'cont_Email', 'cont_Asunto'];
    protected $useSoftDeletes   = true;

    protected $useTimestamps    = true;
    protected $createdField     = 'fecha_creacion';
    protected $updatedField     = 'fecha_modif';
    protected $deletedField     = 'con_baja';
}