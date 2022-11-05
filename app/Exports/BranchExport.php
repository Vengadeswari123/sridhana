<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BranchExport implements FromCollection,WithHeadings,WithMapping
{
    public function collection()
    {
        return Master::where('type',9)->with('bank')->with('district')->get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->bank? $data->bank->name: '',
            $data->details? $data->details['ifsccode']: '',
            $data->details? $data->details['micrcode']: '',
            $data->district? $data->district->name: '',
            $data->status==1 ?'Enabled': 'Disabled',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Branch',
            'Bank',
            'IFSC Code',
            'MICR Code',
            'District',
            'Status',
        ];
    }
}
