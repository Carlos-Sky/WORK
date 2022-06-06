<?php

namespace App\Imports;

use App\Materia;
use Maatwebsite\Excel\Concerns\ToModel;

class MateriasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Materia([
      //

      'siglas'  => $row[0], //a en excel
      'materia' => $row[1], //a en excel
      'horas'   => $row[2], //b en excel
     // 'horas' => bcrypt($row[2]),//c en excel encryptar password
      //'horas' =>$row[2],//c en excel encryptar password
        ]);
    }
}
