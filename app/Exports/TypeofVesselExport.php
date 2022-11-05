<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TypeofVesselExport implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',18)->with('vesselcategory')->get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->vesselcategory? $data->vesselcategory->name: '',
            $data->status==1 ?'Enabled': 'Disabled',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Type of Vessel',
            'Vessel Category',
            'Status',
        ];
    }
}
