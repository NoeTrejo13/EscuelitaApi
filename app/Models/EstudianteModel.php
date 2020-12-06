<?php namespace App\Models;

use CodeIgniter\Model;

class EstudianteModel extends Model{
 
    protected $table = 'estudiante';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $allowedFields = ['nombre', 'apellido', 'dui', 'genero','carnet'];

    protected $useTimestamps = true;
    protected $createField = 'create_at';
    protected $updateField = 'update_at';

    protected $validationRules=[
        
        'nombre'              => 'required|alpha_space|min_length[3]|max_length[75]',
        'apellido'            => 'required|alpha_space|min_length[3]|max_length[75]',
        'dui'                 => 'required|alpha_space|min_length[8]|max_length[8]',
        'genero'              => 'required|alpha_space|min_length[3]|max_length[15]',
        'carnet'              => 'required|alpha_space|min_length[3]|max_length[9]',
        'grado_id'            => 'required|alpha_space|min_length[3]|max_length[75]',
    ];

    //no dejar que se salte las validaciones
    protected $skipValidation = false;
}