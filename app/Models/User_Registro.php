<?php 
namespace App\Models;

use CodeIgniter\Model;

class User_Registro extends Model{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['us_Perfil_id', 'us_Name', 'us_Apellido', 'us_Email', 'us_User', 'us_Password', 'us_Direccion', 'us_Telefono', 'us_DNI', 'us_Ciudad', 'us_Provincia', 'us_Baja'];
   
    // Baja logica mediante "useSoftDeletes"
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;
    protected $dateFormat       = "datetime";
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'us_Baja'; 

    // Reglas de validación
    protected $validationRules = [
        "us_Name"       => "required|min_length[3]|max_length[50]",
        "us_Apellido"   => "required|min_length[3]|max_length[50]",
        "us_Email"      => "required|valid_email",
        "us_User"       => "required|is_unique[usuarios.us_User,id,{id}]",
        "us_Password"   => "required|min_length[4]",
        "us_Direccion"  => "required|min_length[8]",
        "us_Telefono"   => "required|min_length[10]",
        "us_DNI"        => "required|min_length[8]",
        "us_Ciudad"     => "required|min_length[4]",
        "us_Provincia"  => "required|min_length[4]"
    ];  

    //Mensajes correspondientes a cada validación
    protected $validationMessages = [
        "us_Name"           => [
            "required"      => 'Campo nombre obligatorio',
            "min_length"    => 'El Nombre debe tener mínimo 3 caracteres',
            "max_length"    => 'El Nombre debe tener máximo 50 caracteres',
        ],
        "us_Apellido"       => [
            "required"      => 'Campo apellido obligatorio',
            "min_length"    => 'El Apellido debe tener mínimo 3 caracteres',
            "max_length"    => 'El Apellido debe tener máximo 50 caracteres',
        ],
        "us_Email"          => [
            "required"      => 'Campo correo electrónico obligatorio',
            "valid_email"   => 'Debe ingresar una dirección de correo válida'
        ],
        "us_User"           => [
            "required"      => 'Campo usuario obligatorio',
            "is_unique"     => 'Nombre de usuario ya existente',
        ],
        "us_Password"       => [
            "required"      => 'Campo contraseña obligatorio',
            "min_length"    => 'La contraseña ingresada debe tener mínimo 4 caracteres'
        ],
        "us_Direccion"      => [
            "required"      => 'Campo dirección obligatorio',
            "min_length"    => 'La Dirección ingresada debe tener mínimo 8 caracteres'
        ],
        "us_Telefono"       => [
            "required"      => 'Campo teléfono obligatorio',
            "min_length"    => 'El teléfono ingresado debe tener mínimo 10 caracteres'
        ],
        "us_DNI"            => [
            "required"      => 'Campo DNI obligatorio',
            "min_length"    => 'El DNI ingresado debe tener mínimo 8 caracteres',
            "max_length"    => 'El DNI ingresado debe tener máximo 8 caracteres',
        ],
        "us_Ciudad"            => [
            "required"      => 'Campo ciudad obligatorio',
            "min_length"    => 'La Ciudad ingresada tener mínimo 4 caracteres'
        ],
        "us_Provincia"            => [
            "required"      => 'Campo provincia obligatorio',
            "min_length"    => 'La Provincia ingresada debe tener mínimo 4 caracteres'
        ],
    ];

    public function buscarUsuarios($term)
    {
        $builder = $this->db->table($this->table);
        $builder->where('us_Baja IS NULL');
        $builder->groupStart();
        $builder->like('us_Name', $term);
        $builder->orLike('us_Apellido', $term);
        $builder->orLike('us_Email', $term);
        $builder->orLike('us_User', $term);
        $builder->groupEnd();

        return $builder->get()->getResultArray();
    }
    public function getUsuariosActivos()
    {
        return $this->where('us_Baja', null)->findAll();
    }
}