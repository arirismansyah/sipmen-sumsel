<?php

namespace App\Exports;

use App\Models\SampleDsrt;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TemplateInputExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;

    public function __construct(string $kode_prov, string $kode_kab, string $kode_kec, string $kode_desa, string $nbs,)
    {
        $this->kode_prov = $kode_prov;
        $this->kode_kab = $kode_kab;
        $this->kode_kec = $kode_kec;
        $this->kode_desa = $kode_desa;
        $this->nbs = $nbs;
    }

    public function collection()
    {
        //
        return SampleDsrt::where('kode_prov', $this->kode_prov)
        ->where('kode_kab', $this->kode_kab)
        ->where('kode_kec', $this->kode_kec)
        ->where('kode_desa', $this->kode_desa)
        ->where('nbs', $this->nbs)
        ->get();
        
    }

    public function headings(): array{
        $column = [
            'no_dsrt',
            'nus',
            'nama_sls',
            'nama_krt',
            'status',
        ];
        return $column;
    }
}
