<?php

namespace App\Console\Commands;

use App\Models\Master;
use Illuminate\Console\Command;

class FinancialYear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:managefinancialyear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data=Master::getshortdet(21)->where('details->primary',1)->get();
        for($i=0;$i<$data->count();$i++){
            $datax=Master::getshortdet(21)->find($data[$i]->id);
            $details=$datax->details??[];
            $details['primary']=0;
            $datax->details=$details;
            $datax->save();
        }
        $name=Date('Y').' - '.Date('Y',strtotime('+1 year'));
        $data=Master::getshortdet(21)->where('name',$name)->first();
        $details=$data?$data->details:[];
        // return $details;
        if(!$data){
            $data= new Master();
            $data->type=21;
            $data->level=1;
            $details['from']=date('Y');
            $details['to']=Date('Y',strtotime('+1 year'));
            $details['name']= $details['from']+ $details['to'];
        }
        $details['primary']= 1;
        $data->details=$details;
        $data->save();
        return 0;
    }
}
