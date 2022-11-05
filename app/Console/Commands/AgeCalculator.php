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
    protected $signature = 'command:agecalculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate age as per DOB on daily';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $data=Beneficiary::whereMonth('personal->dob', '=', Carbon::now()->format('m'))->whereDay('personal->dob', '=', Carbon::now()->format('d'))->get();
        for($i=0;$i<$data->count();$i++){
            $temp=$data[$i];
            $personal=$temp->personal;
            $endtime=date_create(date('Y-m-d',strtotime($temp->personal['dob'])));
            $current=date_create(Date('Y-m-d'));
            $x=date_diff($endtime, $current);
            $personal['age']=$x->y??$personal['age']??null;
            $data[$i]->personal=$personal;
            $data[$i]->save();
        }


        $data=BeneficiaryExtra::whereMonth('personal->dob', '=', Carbon::now()->format('m'))->whereDay('personal->dob', '=', Carbon::now()->format('d'))->get();
        for($i=0;$i<$data->count();$i++){
            $temp=$data[$i];
            $personal=$temp->personal;
            $endtime=date_create(date('Y-m-d',strtotime($temp->personal['dob'])));
            $current=date_create(Date('Y-m-d'));
            $x=date_diff($endtime, $current);
            $personal['age']=$x->y??$personal['age']??null;
            $data[$i]->personal=$personal;
            $data[$i]->save();
        }

        return 0;
    }
}
