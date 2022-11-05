<?php

namespace App\Imports\Scheme;

use App\Http\Controllers\Admin\Master\GeneralController;
use App\Http\Controllers\GeneralController as ControllersGeneralController;
use App\Models\Beneficiary;
use App\Models\Boat\BoatExtra;
use App\Models\BoatDetails;
use App\Models\Master;
use App\Models\Scheme;
use DateTime;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

HeadingRowFormatter::default('none');

class Leanrelief implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    public function model(array $row)
    {
        $typeofscheme = 'State';
        $typeofschemesmall = 'state';
        $scheme = 'leanrelief';
        $url = '/admin/scheme/state/leanrelief';
        $title = 'Lean Relief';
        $data = new Scheme();
        $benef = Beneficiary::where('personal->aadharnumber', $row['Aadhar Number'])->first();

        if ($benef) {

            $batch='';
            if($row['Financial Year']){
                $finan=Master::getshortdet(21)->where('name',$row['Financial Year'])->first();
                $batch=$finan?$finan->id:null;
            }

            $data->benef_id = $benef->id;
            $data->typeofscheme = $typeofscheme;
            $data->scheme = $scheme;
            $data->title = $title;
            $meta = [];
            $meta['batch'] = $batch;
            $meta['district'] = $benef->personal['district'] ?? null;
            $meta['taluk'] = $benef->personal['taluk'] ?? null;
            $meta['village'] = $benef->personal['village'] ?? null;
            $meta['hamlet'] = $benef->personal['hamlet'] ?? null;
            $meta['religion'] = $benef->personal['religion'];
            $meta['age'] = $benef->personal['age'];
            $meta['society'] = $benef->society['society'];
            $meta['aadharnumber']=$benef->personal['aadharnumber'];
            $data->meta = $meta;
            $details=[];
            $details['benef_id'] = $benef->id ?? null;
            $details['name'] = $benef->name ?? null;
            $details['batch'] = $batch ?? null;
            $details['fathername'] = $benef->personal['fathername'] ?? null;
            $details['address']=$row['Address']??null;
            $details['contactaddresss']=$row['Permanent Address']??null;
            $details['phoneno']=$benef->personal['phoneno']!='null'?$benef->personal['phoneno']:null;
            $details['aadharnumber']=$benef->personal['maskedaadharnumber']??null;
            $details['electoralid']=$benef->personal['electoralid'] ?? null;
            $details['rationcard']=$benef->personal['rationcard'] ?? null;
            $details['rationcardtype']=$benef->personal['rationcardtype'] ?? null;
            $details['copeativesocietyid'] = $benef->societydetails['id'] ?? null;
            $details['copeativesociety']=$benef->societydetails['name']??null;


            $details['assitancerequired']=$row['Availed Relief Previous Year']??null;
            $details['assitancerequireddetail']=$row['Availed Relief Previous Year Details']??null;
            $details['govtemployee']=$row['Govt Employee']??null;
            $details['govtemployeedetail']=$row['Govt Employee Details']??null;
            $details['amount']=$row['Amount']??null;
            $details['fcsno']=$benef->society['memberno']??null;
            $details['ifsc'] = $row['IFSC'] ?? null;
            $details['bank'] = $row['Bank'] ?? null;
            $details['branch'] = $row['Branch'] ?? null;
            $details['acno'] = $row['ACNO'] ?? null;

            $details['anyotherinfo']=null;
            $details['status'] = 0;
            $details['statustext'] = 'Under Process';

            $data->details = $details;

            $documents = [];
            $documents['addressproof'] = null;
            $documents['bankpassbook'] = null;
            $documents['previousrelief'] = null;
            $documents['relevantdocument'] = null;
            $data->documents = $documents;
            $x = [];
            $data->status = 0;
            $data->save();
        }
    }
}
