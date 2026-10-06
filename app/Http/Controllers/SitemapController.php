<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Tool;
class SitemapController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        $contents = view('sitemap.xml', compact('tools'));
        return response($contents, 200)->header('Content-Type', 'application/xml');
    }
}
