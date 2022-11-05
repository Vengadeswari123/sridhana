<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use App\Models\BeneficiaryExtra;
use App\Models\Boat\BoatExtra;
use App\Models\BoatDetails;
use App\Models\Master;
use App\Models\Misc\VillageUser;
use App\Models\Scheme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public static function agegroup($request, $usertype, $userid)
    {
        $ranges = [
            '0-18',
            '18-30',
            '31-45',
            '46-55',
            '56-60',
            '61+',
        ];
        $subdata = [];
        $villageper = [];
        if ($usertype != 1) {
            $villageper = VillageUser::where('uid', $userid)->pluck('vid');
        }
        for ($i = 0; $i < count($ranges); $i++) {
            $x = [];
            $x['name'] = $ranges[$i];


            if (strpos($ranges[$i], '+')) {
                $splitx = explode('+', $ranges[$i]);

                $a = BeneficiaryExtra::select('id', 'personal')->doesntHave('aadhar')->where('type', 'familymember')->where(function ($query) use ($splitx) {
                    $query->where('personal->age', '>=', (int)($splitx[0]));
                });
                if ($usertype != 1) {
                    $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                    $a = $a->whereHas('beneficiary', function ($q) use ($villageper) {
                        return $q->whereIn('personal->village', $villageper);
                    });
                }
                $x['value'] = Beneficiary::select('id', 'personal')->union($a)->where(function ($query) use ($splitx) {
                    $query->where('personal->age', '>=', (int)($splitx[0]));
                });
                if ($usertype != 1) {
                    $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                    $x['value'] = $x['value']->whereIn('personal->village', $villageper);
                }
                $x['value'] = $x['value']->count();
            } else {
                $splitx = explode('-', $ranges[$i]);
                $a = BeneficiaryExtra::select('id', 'personal')->doesntHave('aadhar')->where('type', 'familymember')->where(function ($query) use ($splitx) {
                    $query->where('personal->age', '>=', (int)($splitx[0]))->where('personal->age', '<=', (int)($splitx[1]));
                });

                if ($usertype != 1) {
                    $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                    $a = $a->whereHas('beneficiary', function ($q) use ($villageper) {
                        return $q->whereIn('personal->village', $villageper);
                    });
                }
                $x['value'] = Beneficiary::select('id', 'personal')->union($a)->where(function ($query) use ($splitx) {
                    $query->where('personal->age', '>=', (int)($splitx[0]))->where('personal->age', '<=', (int)($splitx[1]));
                });

                if ($usertype != 1) {
                    $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                    $x['value'] = $x['value']->whereIn('personal->village', $villageper);
                }
                $x['value'] = $x['value']->count();
            }
            array_push($subdata, $x);
        }
        $datax['data'] = $subdata;
        $datax['legend'] = $ranges;
        return $datax;
    }

    public static function gender($request, $usertype, $userid)
    {
        $ranges = [
            'Male',
            'Female',
            'Transgender',
        ];
        $subdata = [];
        $villageper = [];
        if ($usertype != 1) {
            $villageper = VillageUser::where('uid', $userid)->pluck('vid');
        }
        for ($i = 0; $i < count($ranges); $i++) {
            $x = [];
            $x['name'] = $ranges[$i];
            $name = $x['name'];
            $a = BeneficiaryExtra::select('id', 'personal')->doesntHave('aadhar')->where('type', 'familymember')->where(function ($query) use ($name) {
                $query->where('personal->gender', $name);
            });

            if ($usertype != 1) {
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                $a = $a->whereHas('beneficiary', function ($q) use ($villageper) {
                    return $q->whereIn('personal->village', $villageper);
                });
            }
            $x['value'] = Beneficiary::select('id', 'personal')->union($a)->where(function ($query) use ($name) {
                $query->where('personal->gender', $name);
            });
            if ($usertype != 1) {
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                $x['value'] = $x['value']->whereIn('personal->village', $villageper);
            }
            $x['value'] = $x['value']->count();
            array_push($subdata, $x);
        }
        $datax['data'] = $subdata;
        $datax['legend'] = $ranges;
        return $datax;
    }
    public static function qualification($request, $usertype, $userid)
    {
        $ranges = Master::where('type', 5)->where('status', 1)->get();
        $subdata = [];
        for ($i = 0; $i < count($ranges); $i++) {
            $x = [];
            $x['name'] = $ranges[$i]['name'];
            $name = $ranges[$i]['id'];
            $a = BeneficiaryExtra::select('id', 'personal')->doesntHave('aadhar')->where('type', 'familymember')->where(function ($query) use ($name) {
                $query->where('personal->qualification', $name);
            });
            if ($usertype != 1) {
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                $a = $a->whereHas('beneficiary', function ($q) use ($villageper) {
                    return $q->whereIn('personal->village', $villageper);
                });
            }
            $x['value'] = Beneficiary::select('id', 'personal')->union($a)->where(function ($query) use ($name) {
                $query->where('personal->educationalqualification', $name);
            });
            if ($usertype != 1) {
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                $x['value'] = $x['value']->whereIn('personal->village', $villageper);
            }
            $x['value'] = $x['value']->count();
            array_push($subdata, $x);
        }
        $datax['data'] = $subdata;
        $datax['legend'] = Master::where('type', 5)->where('status', 1)->pluck('name');
        return $datax;
    }
    public static function profession($request, $usertype, $userid)
    {

        $ranges = ['Student', 'Marine Fishermen', 'Inland Fishermen', 'Fish Farmer', 'Allied Fisheries Activity', 'Goverment', 'Qasi Goverment', 'Others'];
        $subdata = [];
        $subdata = [];
        $villageper = [];

        for ($i = 0; $i < count($ranges); $i++) {
            $x = [];
            $x['name'] = $ranges[$i];
            $name = $x['name'];
            $a = BeneficiaryExtra::select('id', 'personal')->doesntHave('aadhar')->where('type', 'familymember')->where(function ($query) use ($name) {
                $query->where('personal->professional', $name);
            });;
            $x['value'] = Beneficiary::select('id', 'personal')->union($a)->where(function ($query) use ($name) {
                $query->where('personal->typeoffishermen', $name);
            });

            if ($usertype != 1) {
                $x['value'] = $x['value']->whereIn('personal->village', $villageper);
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
            }
            $x['value'] = $x['value']->count();
            array_push($subdata, $x);
        }
        $datax['data'] = $subdata;
        $datax['legend'] = $ranges;
        return $datax;
    }

    public function beneficiary(Request $request)
    {
        $type = $request->type ?? 0;
        $datax = [];
        if (!in_array($type, [0, 1, 2, 3])) {
            $type = 0;
        }
        $sign = 0;
        if ($request->signid) {
            $usertype = $request->usertype ?? 2;
            $userid = $request->signid ?? null;
            $sign = 1;
        } else {
            $usertype = Auth::user()->usertype ?? 2;
            $userid = Auth::user()->id ?? null;
        }

        if ($type == 0) {
            $datax = Dashboard::agegroup($request, $usertype, $userid);
        } else if ($type == 1) {
            $datax = Dashboard::gender($request, $usertype, $userid);
        } else if ($type == 2) {
            $datax = Dashboard::qualification($request, $usertype, $userid);
        } else if ($type == 3) {
            $datax = Dashboard::profession($request, $usertype, $userid);
        }
        return view('Admin.Dashboard.beneficiary', ['type' => $type, 'datax' => $datax, 'sign' => $sign]);
    }



    public function application(Request $request)
    {
        $type = $request->type ?? 0;
        $datax = [];
        if (!in_array($type, [0, 1, 2, 3])) {
            $type = 0;
        }
        $ranges = [
            'Approved',
            'Rejected',
            'Under Process',
        ];
        $subdata = [];

        $sign = 0;
        if ($request->signid) {
            $usertype = $request->usertype ?? 2;
            $userid = $request->signid ?? null;
            $sign = 1;
        } else {
            $usertype = Auth::user()->usertype ?? 2;
            $userid = Auth::user()->id ?? null;
        }

        $villageper = [];
        for ($i = 0; $i < count($ranges); $i++) {
            $x = [];
            $x['name'] = $ranges[$i];
            $x['value'] = Scheme::where('details->statustext', $ranges[$i]);

            if ($usertype != 1) {
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                $x['value'] = $x['value']->whereIn('meta->village', $villageper);
            }
            $x['value'] = $x['value']->count();
            if (!$x['value']) {
                $x['value'] = 0;
            }
            array_push($subdata, $x);
        }
        $datax['data'] = $subdata;
        $datax['legend'] = $ranges;
        return view('Admin.Dashboard.application', ['type' => $type, 'datax' => $datax, 'sign' => $sign]);
    }


    public function boatexpiry(Request $request)
    {
        $type = $request->type ?? 0;
        $datax = [];

        $subdata = [];

        $sign = 0;
        if ($request->signid) {
            $usertype = $request->usertype ?? 2;
            $userid = $request->signid ?? null;
            $sign = 1;
        } else {
            $usertype = Auth::user()->usertype ?? 2;
            $userid = Auth::user()->id ?? null;
        }

        $villageper = [];
        $datax['lisenceexpiry'] = BoatDetails::with(['vesselcategory', 'typeofvessel', 'baseofop'])->where(function ($query) {
            $query->where('details->licenseexpiry', '<=', date('Y-m-d'))
                ->orWhere('details->licenseexpiry', '<', date('Y-m-d', strtotime('+1 month')));
        });

        if ($usertype != 1) {
            $villageper = VillageUser::where('uid', $userid)->pluck('vid');
            $datax['lisenceexpiry'] = $datax['lisenceexpiry']->whereIn('meta->village', $villageper);
        }
        $datax['lisenceexpiry'] = $datax['lisenceexpiry']->get();

        $datax['insurance'] = BoatExtra::where('type', 'insurance')->with('boat')->where(function ($query) {
            $query->where('details->periodto', '<=', date('Y-m-d'))
                ->orWhere('details->periodto', '<', date('Y-m-d', strtotime('+1 month')));
        });

        if ($usertype != 1) {
            $villageper = VillageUser::where('uid', $userid)->pluck('vid');
            $datax['insurance'] = $datax['insurance']->whereIn('meta->village', $villageper);
        }
        $datax['insurance'] = $datax['insurance']->get();


        // return $datax['insurance'];
        return view('Admin.Dashboard.boatexpiry', ['type' => $type, 'datax' => $datax, 'sign' => $sign]);
    }


    public function scheme(Request $request)
    {
        $type = $request->type ?? 0;
        $datax = [];
        if (!in_array($type, [0, 1, 2, 3])) {
            $type = 0;
        }
        $ranges = [];
        $title = [];
        if ($type == 0 || $type == 1) { //central
            array_push($ranges, 'pmmsy_mcs', 'pmmsy_development_of_deep_sea_fishing', 'pmmsy_project_office', 'pmmsy_safety_and_security');
            array_push($title, 'PMMSY - Monitoring, Control and Survilance (MCS)', 'PMMSY - Development of Deep Sea Fishing', 'PMMSY - Project Office', 'PMMSY - Strengthening of Safety and Security of Fishermen',);
        }

        if ($type == 0 || $type == 2) { //state
            array_push($ranges, 'banrelief', 'cashaward', 'oap', 'reactivationcharge');
            array_push($title, 'Ban Relief', 'Cash Award for School Students', 'Old Age Pension', 'Reactivation Charge');
        }
        $subdata = [];

        $sign = 0;
        if ($request->signid) {
            $usertype = $request->usertype ?? 2;
            $userid = $request->signid ?? null;
            $sign = 1;
        } else {
            $usertype = Auth::user()->usertype ?? 2;
            $userid = Auth::user()->id ?? null;
        }


        $villageper = [];
        for ($i = 0; $i < count($ranges); $i++) {
            $x = [];
            $x['name'] = $title[$i];
            $x['value'] = Scheme::where('scheme', $ranges[$i]);

            if ($usertype != 1) {
                $villageper = VillageUser::where('uid', $userid)->pluck('vid');
                $x['value'] = $x['value']->whereIn('meta->village', $villageper);
            }
            $x['value'] = $x['value']->count();
            if (!$x['value']) {
                $x['value'] = 0;
            }
            array_push($subdata, $x);
        }
        $datax['data'] = $subdata;
        $datax['legend'] = $title;
        return view('Admin.Dashboard.scheme', ['type' => $type, 'datax' => $datax, 'sign' => $sign]);
    }

    public function boatvesselcategory(Request $request)
    {
        $type = $request->type ?? 0;
        $datax = [];
        if (!in_array($type, [0, 1, 2, 3])) {
            $type = 0;
        }
        $subdata = [];

        $sign = 0;
        if ($request->signid) {
            $usertype = $request->usertype ?? 2;
            $userid = $request->signid ?? null;
            $sign = 1;
        } else {
            $usertype = Auth::user()->usertype ?? 2;
            $userid = Auth::user()->id ?? null;
        }



        $villageper = [];
        $data = Master::getshortinfo(17)->select('id', 'name');
        if ($usertype != 1) {
            $villageper = VillageUser::where('uid', $userid)->pluck('vid');
            $data = $data->whereHas('boatvesselcategory', function ($q) use ($villageper) {
                return $q->whereIn('meta->village', $villageper);
            });
        }
        $data = $data->withCount('boatvesselcategory as value')->get();
        $datax['data'] = $data;
        $datax['legend'] = Master::getshortinfo(17)->select('id', 'name')->whereHas('boatvesselcategory', function ($q) use ($villageper) {
            return $q->whereIn('meta->village', $villageper);
        })->withCount('boatvesselcategory as value')->pluck('name');


        // return json_encode($datax);

        $titx = [];
        $titx['name'] = 'Boat - Vessel Category';
        $titx['title'] = 'Vessel Category';
        return view('Admin.Dashboard.boat', ['type' => $type, 'datax' => $datax, 'sign' => $sign, 'titx' => $titx]);
    }
    public function boattypeofvessel(Request $request)
    {
        $type = $request->type ?? 0;
        $datax = [];
        if (!in_array($type, [0, 1, 2, 3])) {
            $type = 0;
        }
        $subdata = [];

        $sign = 0;
        if ($request->signid) {
            $usertype = $request->usertype ?? 2;
            $userid = $request->signid ?? null;
            $sign = 1;
        } else {
            $usertype = Auth::user()->usertype ?? 2;
            $userid = Auth::user()->id ?? null;
        }



        $villageper = [];
        $data = Master::getshortinfo(18)->select('id', 'name');
        if ($usertype != 1) {
            $villageper = VillageUser::where('uid', $userid)->pluck('vid');
            $data = $data->whereHas('boattypeofvessel', function ($q) use ($villageper) {
                return $q->whereIn('meta->village', $villageper);
            });
        }
        $data = $data->withCount('boattypeofvessel as value')->has('boattypeofvessel', '>', 0)->get();
        $datax['data'] = $data;
        $datax['legend'] = Master::getshortinfo(17)->select('id', 'name')->whereHas('boattypeofvessel', function ($q) use ($villageper) {
            return $q->whereIn('meta->village', $villageper);
        })->withCount('boattypeofvessel as value')->has('boattypeofvessel', '>', 0)->pluck('name');


        // return $datax;
        // return json_encode($datax);

        $titx = [];
        $titx['name'] = 'Boat - Type of Vessel';
        $titx['title'] = 'Type of Vessel';
        return view('Admin.Dashboard.boat', ['type' => $type, 'datax' => $datax, 'sign' => $sign, 'titx' => $titx]);
    }
}
