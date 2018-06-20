<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;

class BaseController extends Controller
{
    public function getIndex () {
        return view ('index');
    }
    public function getStatic ($id='index') {
        $obj=Maintext::where('url',$id)->first();
        return view ('static', compact('obj'));
    }
}


