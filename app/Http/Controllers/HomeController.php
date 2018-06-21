<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Input;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj = Profile::where('user_id', Auth::user()->id)->first();
        return view('home', compact('obj'));
        
    }
    public function postIndex (\App\Http\Requests\ProfileRequest $r) {
            // dd($_POST, $_FILES);
                // dd($r->all());
                $r['picture']='';
                $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],
                '/uploads/'.Auth::user()->id.'/',Auth::user()->id.'.jpg');
                if ($pic) {
                    $r['picture']=$pic;
                }
                $r['user_id']=Auth::user()->id;
            
                Profile::updateOrCreate(['user_id' => Auth::user()->id],$r->all()); //обновляет поле при изменении
                
                return redirect('home');
                
  
            
    }
}
