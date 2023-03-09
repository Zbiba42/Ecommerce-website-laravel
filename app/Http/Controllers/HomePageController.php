<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function Index()
    {
        return view('homepage', [
            'products' => product::all(),
        ]);
    }

    public function IndexCategory(Request $request)
    {
        return view('homepage', [
            'products' => product::all()->where('Category', '=', $request->category)
        ]);
    }
}
