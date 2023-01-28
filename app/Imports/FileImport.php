<?php

namespace App\Imports;

use App\Models\Importation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FileImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new Importation([
            "matricule" => $row['matricule'],
            "firstname" => $row['prenom'],
            "lastname" => $row['nom'],
            "address" => $row['adresse1'],
            "second_address" => $row['adresse2'],
            "postal_code" => $row['code_postal'],
            "city" => $row['ville'],
        ]);
    }
}
