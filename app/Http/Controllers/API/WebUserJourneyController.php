<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class WebUserJourneyController extends Controller
{
    public function main_view(){
        $packages = Package::get();
        $pack_normal = $packages[0];
        $pack_standard = $packages[1];
        $pack_luxury = $packages[2];
        return view('layouts.frontview', compact('pack_normal','pack_standard', 'pack_luxury'));
    }
}
