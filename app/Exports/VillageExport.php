<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VillageExport implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',12)->with('village')->with('taluk')->with('district')->get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->taluk? $data->taluk->name: '',
            $data->district? $data->district->name: '',
            $data->status==1 ?'Enabled': 'Disabled',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Village',
            'Taluk',
            'District',
            'Status',
        ];
    }
}
