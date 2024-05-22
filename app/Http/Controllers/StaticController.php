<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //
    public function index(){
        return view('consumer.index');
    }
    public function adminHome(){
        return view('admin.index');
    }
    public function mangerHome(){
        return view('manager.index');
    }
}
