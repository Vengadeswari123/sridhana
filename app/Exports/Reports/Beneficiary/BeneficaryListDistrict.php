<?php

namespace App\Exports\Reports\Beneficiary;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BeneficaryListDistrict implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',1)->get();
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
