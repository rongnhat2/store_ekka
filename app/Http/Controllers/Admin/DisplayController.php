<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function statistic(){
        return view('admin.manager.statistic');
    }
}
