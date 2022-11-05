<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HamletExport implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',13)->with('village')->with('taluk')->with('district')->get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->village? $data->details['code']: '',
            $data->village? $data->village->name: '',
            $data->taluk? $data->taluk->name: '',
            $data->district? $data->district->name: '',
            $data->status==1 ?'Enabled': 'Disabled',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Area',
            'Code',
            'Village',
            'Taluk',
            'District',
            'Status',
        ];
    }
}
