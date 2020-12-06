<?php namespace App\Controllers\API;

use App\Models\EstudianteModel;
use CodeIgniter\RESTful\ResourceController;

class Estudiante extends ResourceController
{

    public function __construct(){
        $this->model = $this->setModel(new EstudianteModel());
    }

	public function index()
	{
        $Estudiante = $this->model->findAll();
        return $this->response($Estudiante);
	//echo "Hola Emily";
	}
}
