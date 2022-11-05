<?php

namespace App\Console\Commands;

use App\Models\Beneficiary;
use App\Models\BeneficiaryExtra;
use Carbon\Carbon;
use Illuminate\Console\Command;

class AgeCalculator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:changeaadhar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert Aadhar to masked adhar of last 2 digits';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $benef=Beneficiary::get();
        for($i=0;$i<$benef->count();$i++){
            $data=Beneficiary::find($benef[$i]->id);
            $personal=$data->personal??[];
            $aadhar=$personal['aadharnumber']??null;
            $maskedaadhar = substr($aadhar, -2);
            $maskedaadhar=str_pad($maskedaadhar,12,'X',STR_PAD_LEFT);
            $personal['aadharnumber']=$aadhar??null;
            $personal['maskedaadharnumber']=$maskedaadhar??null;
            $data->personal=$personal;
            $data->save();
        }

        $benef=BeneficiaryExtra::get();
        for($i=0;$i<$benef->count();$i++){
            $data=BeneficiaryExtra::find($benef[$i]->id);
            $personal=$data->personal??[];
            $aadhar=$personal['aadharnumber']??null;
            $maskedaadhar = substr($aadhar, -2);
            $maskedaadhar=str_pad($maskedaadhar,12,'X',STR_PAD_LEFT);
            $personal['aadharnumber']=$aadhar??null;
            $personal['maskedaadharnumber']=$maskedaadhar??null;
            $data->personal=$personal;
            $data->save();
        }
        return 0;
    }
}
