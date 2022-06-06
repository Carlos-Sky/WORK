<?php

namespace App\Imports;

use App\Grupo;
use Maatwebsite\Excel\Concerns\ToModel;

class GruposImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Grupo([
        
      'No'  => $row[0],
      'matricula' => $row[1], 
      'correo'   => $row[2], 
      'nombre'   => $row[3], 
      'apellido_paterno'   => $row[4], 
      'apellido_materno'   => $row[5], 
     
        ]);
    }
}
