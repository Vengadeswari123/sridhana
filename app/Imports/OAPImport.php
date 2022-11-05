<?php

namespace App\Imports;

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

class OAPImport implements ToModel, WithHeadingRow,SkipsEmptyRows
{
    public function model(array $row)
    {
        $typeofscheme = 'State';
        $typeofschemesmall = 'state';
        $scheme = 'oap';
        $url = '/admin/scheme/state/oap';
        $title = 'Old Age Pension';
        $data = new Scheme();
        $benef=Beneficiary::where('personal->aadharnumber',$row['Beneficiary Aadhar'])->first();

if ($benef) {
    $district='';
    $taluk='';
    $village='';
    $hamlet='';
    $data->benef_id = $benef->id;
    $data->typeofscheme = $typeofscheme;
    $data->scheme = $scheme;
    $data->title = $title;
    $meta=[];
    $meta['batch']=null;
    $meta['district']=$benef->personal['district']??null;
    $meta['taluk']=$benef->personal['taluk']??null;
    $meta['village']=$benef->personal['village']??null;
    $meta['hamlet']=$benef->personal['hamlet']??null;
    $meta['religion']=$benef->personal['religion'];
    $meta['age']=$row['Age'];
    $meta['society']=$benef->society['society'];
    $data->meta=$meta;
    $data->save();

    $details['benef_id']=$benef->id??null;
    $details['name']=$benef->name??null;

    $details['dob']=$benef->personal['dob']??null;
    $details['ageap']=$row['Age']??null;

    $details['address']=$row['Address']??null;
    $details['contactaddresss']=$row['Permanenet Address']??null;
    $details['phoneno']=$row['Phone number']??null;
    $details['aadharnumber']=$row['Aadhar Number Applicant']??null;

    $date = DateTime::createFromFormat('d/m/Y', $row['Date Recieved']);
    // $date->format('Y-m-d')??
    $basic['daterecived']=null;

    $details['widow']=$row['Is Applicant a Widow']=='Yes' ? 1 : 0;
    $details['addressguardian']=$row['Name & Address of Guardian ']??null;
    $date = DateTime::createFromFormat('d/m/Y', $row['Date of Death of the Husband']);
    $basic['deathdate']=null;

    $details['totalincome']=$row['Total Income']??null;
    $details['voucherno']=$row['Voucher Number']??null;
    $details['fcsno']=$row['FCS No']??null;
    $details['bankinfo']=$row['Bank Account Number, Branch name with IFSC']??null;
    $details['anyotherinfo']=$row['Any Other Info']??null;

    $details['familyname']=[];
    $details['relation']=[];
    $details['age']=[];
    $details['profession']=[];
    $details['income']=[];
    $details['marriedsingle']=[];
    $details['livingwith']=[];

$details['status']=0;
$details['statustext']='Under Process';
$data->details=$details;
$documents=[];
$filename = 'Scheme/' . $typeofscheme . '/' . $scheme;

$documents['address'] = null;
$documents['community'] = null;
$documents['noc'] = null;
$documents['death'] = null;
$documents['aadhar'] = null;
$data->documents=$documents;
$x = [];
    $data->status=0;
    $data->save();
}
    }
}
