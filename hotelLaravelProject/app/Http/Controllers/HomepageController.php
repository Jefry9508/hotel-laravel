<?php
/**
 * Created by PhpStorm.
 * User: WINDOWS 10
 * Date: 13/05/2018
 * Time: 1:25 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Auth;

class HomepageController
{

    public function index(){
        if(is_null(Auth::user())){
            return view('auth.login');
        }
        $hotels=Hotel::all();
        //dd($hotels);
        return view('homepage.index',compact('hotels'));
    }

}