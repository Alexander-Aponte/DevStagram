<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');    
    }
    public function index()
    {
        //dd(Auth()->user());
        return view('Dashboard');
    }
}
