<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SocietyExport implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',15)->with('district')->get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->details? $data->details['societynumber']: '',
            $data->details? $data->details['societycontactno']: '',
            $data->details? $data->details['societycontactperson']: '',
            $data->district? $data->district->name: '',
            $data->status==1 ?'Enabled': 'Disabled',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Society',
            'Society Number',
            'Society Contact Number',
            'Society Contact Person',
            'Society Address',
            'District',
            'Status',
        ];
    }
}
