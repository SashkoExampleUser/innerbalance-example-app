<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke(): View
    {
        return view('pages::login.index');
    }
}
