<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function master(){
        return view('admin.master.list');
    }
}
