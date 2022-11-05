<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Support\Facades\Storage;
use File;
use Str;
class GeneralController extends Controller
{
    public static function filesave($image, $loc)
    {
        $name = null;
        while (1) {
            $strrand = Str::random(16);
            if (!$name) {
                $clext = $image->getClientOriginalExtension();
                if (!Storage::disk('public')->exists($loc . '/' . $strrand . '.' . $clext)) {
                    $newfilename = $loc . '/' . $strrand . "." . $clext;
                    Storage::disk('public')->put($newfilename, File::get($image));
                    $name = 'storage/' . $newfilename;
                    return $name;
                }
            }
            if ($name) {
                break;
            }
        }
    }
    public static function storedocuments($request, $name, $data, $filename)
    {
        if ($request->file($name)) {
            if ($data) {
                $data ? File::delete(public_path($data)) : null;
            }
            $image = $request->file($name);
            return GeneralController::filesave($image, $filename) ?? null;
        }
        return $data;
    }




}
