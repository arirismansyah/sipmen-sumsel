<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InputDsrtImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */

    public $data_input_dsrt;

    public function __construct()
    {
        $this->data_input_dsrt = array();
    }

    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $row) {
            # code...
            $no_dsrt = $row['no_dsrt'];
            $nus = $row['nus'];
            $nama_sls = $row['nama_sls'];
            $nama_krt = $row['nama_krt'];
            $status_dikirim = $row['status_dikirim'];
            $status_response = $row['status_response'];

            $dsrt_row = array(
                'no_dsrt' => $no_dsrt,
                'nus' => $nus,
                'nama_sls' => $nama_sls,
                'nama_krt' => $nama_krt,
                'status_dikirim' => $status_dikirim,
                'status_response' => $status_response,
            );

            array_push($this->data_input_dsrt, $dsrt_row);

        }
    }

    public function get_input_dsrt(): array
    {
        return $this->data_input_dsrt;
    }
}
