<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Tool;

class HomeController extends Controller
{
    public function index()
    {
        $tools = Tool::orderBy('id', 'asc')->get();
        return view('pages.home', compact('tools'));
    }
}
