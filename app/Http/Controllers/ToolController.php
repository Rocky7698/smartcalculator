<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolController extends Controller
{
  public function show($slug)
  {
    $allowedTools = [
      'gst-calculator',
      'emi-calculator',
      'loan-calculator',
      'marks-percentage',
      'age-calculator',
      'area-calculator',
      'volume-calculator',
      'bmi-calculator',
      'data-calculator',
      'discount-calculator',
      'income-tax-calculator',
      'currency-converter',
    ];
    // if ($slug === 'currency-converter') {
    //   return view('tools.currency', compact('tool'));
    // }

    if (!in_array($slug, $allowedTools)) {
      abort(404);
    }

    return view('tools.show', [
      'slug' => $slug
    ]);
  }
}
