<?php

namespace App\Http\Controllers\Web;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('pages::home.index');
    }
}
