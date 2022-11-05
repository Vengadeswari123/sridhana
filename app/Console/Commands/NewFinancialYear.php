<?php

namespace App\Console\Commands;

use App\Models\Master;
use Illuminate\Console\Command;

class NewFinancialYear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:newfinancialyear';

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

        $data= new Master();
        $data->type=21;
        $data->level=1;
        $details['from']=date('Y');
        $details['to']=Date('Y',strtotime('+1 year'));
        $details['name']= $details['from']+ $details['to'];
        $details['primary']= 0;
        $data->details=$details;
        $data->save();
        return 0;
    }
}
