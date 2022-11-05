<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubsidyBoatExport implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',28)->get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->status==1 ?'Enabled': 'Disabled',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Status',
        ];
    }
}
