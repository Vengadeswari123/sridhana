<?php

namespace Database\Seeders;

use App\Models\Permissions;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usertype=new UserType();
        $usertype->name='Admin';
        $details=[];
        $details['alliedactivity']=1;
        $details['bank']=1;
        $details['branch']=1;
        $details['caste']=1;
        $details['castecategory']=1;
        $details['communication']=1;
        $details['communicationman']=1;
        $details['engine']=1;
        $details['employment']=1;
        $details['fishingarea']=1;
        $details['hullmaterial']=1;
        $details['insurancecompany']=1;
        $details['lifesaving']=1;
        $details['navigation']=1;
        $details['qualification']=1;
        $details['relationship']=1;
        $details['religion']=1;
        $details['society']=1;
        $details['subsidyboat']=1;
        $details['usermanage']=1;
        $details['userrole']=1;
        $details['vesselcategory']=1;
        $details['typeofvessel']=1;
        $details['typeofgear']=1;
        $details['district']=1;
        $details['taluk']=1;
        $details['village']=1;
        $details['hamlet']=1;
        $details['importexport']=1;
        $details['schemestatus']=1;
        $details['benefadd']=1;
        $details['benefedit']=1;
        $details['benefview']=1;
        $details['benefdelete']=1;
        $details['boatadd']=1;
        $details['boatedit']=1;
        $details['boatview']=1;
        $details['boatdelete']=1;
        $details['pmmsydeepseaadd']=1;
        $details['pmmsydeepseaedit']=1;
        $details['pmmsydeepseaview']=1;
        $details['pmmsydeepseadelete']=1;
        $details['pmmsymcsadd']=1;
        $details['pmmsymcsedit']=1;
        $details['pmmsymcsview']=1;
        $details['pmmsymcsdelete']=1;
        $details['pmmsysafety_and_securityadd']=1;
        $details['pmmsysafety_and_securityedit']=1;
        $details['pmmsysafety_and_securityview']=1;
        $details['pmmsysafety_and_securitydelete']=1;
        $details['pmmsyproject_officeadd']=1;
        $details['pmmsyproject_officeedit']=1;
        $details['pmmsyproject_officeview']=1;
        $details['pmmsyproject_officedelete']=1;
        $details['statebanreliefadd']=1;
        $details['statebanreliefedit']=1;
        $details['statebanreliefview']=1;
        $details['statebanreliefdelete']=1;
        $details['stateleanreliefadd']=1;
        $details['stateleanreliefedit']=1;
        $details['stateleanreliefview']=1;
        $details['stateleanreliefdelete']=1;
        $details['statelansadd']=1;
        $details['statelansedit']=1;
        $details['statelansview']=1;
        $details['statelansdelete']=1;
        $details['statecifnetadd']=1;
        $details['statecifnetedit']=1;
        $details['statecifnetview']=1;
        $details['statecifnetdelete']=1;
        $details['stateinsuranceadd']=1;
        $details['stateinsuranceedit']=1;
        $details['stateinsuranceview']=1;
        $details['stateinsurancedelete']=1;
        $details['statecashawardadd']=1;
        $details['statecashawardedit']=1;
        $details['statecashawardview']=1;
        $details['statecashawarddelete']=1;
        $details['statereactivationchargeadd']=1;
        $details['statereactivationchargeedit']=1;
        $details['statereactivationchargeview']=1;
        $details['statereactivationchargedelete']=1;
        $details['stateoapadd']=1;
        $details['stateoapedit']=1;
        $details['stateoapview']=1;
        $details['stateoapdelete']=1;
        $usertype->details=$details;
        $usertype->save();



        $data=new User();
        $data->name='Admin';
        $data->email='admin@admin.com';
        $data->phno='8825867354';
        $data->type=2;
        $data->usertype=$usertype->id;
        $data->password=Hash::make('7890poiu');
        $data->save();


        $per=new Permissions();
        $per->uid=$data->id;
        $per->roleid=$usertype->id;
        $per->permission=$details;
        $per->save();
    }
}
