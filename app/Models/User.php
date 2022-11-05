<?php

namespace App\Models;

use App\Models\Misc\VillageUser;
use App\Traits\UUID;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;
use Str;

class User extends Authenticatable
{
    use SanctumHasApiTokens, HasFactory, Notifiable;
    use UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'permission' => 'array',
    ];

    public function permissions()
    {
        return $this->hasOne(Permissions::class, 'uid', 'id');
    }
    public function villageuser()
    {
        return $this->hasOne(VillageUser::class, 'uid', 'id');
    }
    public function villageuserpluck()
    {
        return $this->hasMany(VillageUser::class, 'uid', 'id');
    }
    // Auth::user()->permissions->permission['stateinsuranceadd'];
    public static function useraccess($request, $module, $type)
    {
    }

    public static function getuser($request)
    {
        $user = null;
        if ($request->get('uid')) {
            $user = $request->get('uid');
        } else {
            if ($request->user()) {
                $user = $request->user()->id;
            } else {
                $data = new User;
                do {
                    $name = 'temp' . Str::random(10);
                    if (User::where('name', $name)->count() <= 0) {
                        $data = new User;
                        $data->name = $name;
                        $data->save();
                    }
                } while (1);
                $user = $data->id;
            }
            $request->session()->put('uid', $user);
        }
        return $user;
    }

    public static function getdata($name, $sortbyid, $sortby)
    {
        $data = User::select('*');
        if ($name) {
            $data = $data->where('name', 'LIKE', '%' . $name . '%');
        }
        if ($sortbyid && $sortby) {
            $data = $data->orderBy($sortbyid, $sortby);
        }
        return $data;
    }

    public static function manageuser($request)
    {
        if (!$request->id) {
            $data = new User();
            $data->usertype = 1;
        } else {
            $data = User::find($request->id);
        }
        if ($request->password) {
            $data->password = Hash::make($request->password);
        }
        if ($request->email) {
            $data->email = $request->email;
        }
        if ($request->name) {
            $data->name = $request->name;
        }
        if ($request->phno) {
            $data->phno = $request->phno;
        }
        if ($request->usertype) {
            $data->type = $request->usertype;
        }
        $data->save();

        $per = Permissions::where('uid', $data->id)->first();
        if (!$per) {
            $per = new Permissions();
            $per->uid = $data->id;
        }
        $per->roleid = $request->usertype;
        $per->permission = $request->permission;
        $per->save();

        VillageUser::where('uid', $data->id)->whereNotIn('vid', $request->villageuserpluck)->delete();
        for ($i = 0; $i < count($request->villageuserpluck); $i++) {
            VillageUser::manage($data->id, $request->villageuserpluck[$i]);
        }

        return $data;
    }

    public static function deleteuser($id)
    {
        $data = User::find($id);
        if ($data) {
            Permissions::where('uid', $data->id)->delete();
            VillageUser::where('uid', $data->id)->delete();
            $data->delete();
        }
        return 1;
    }
}
