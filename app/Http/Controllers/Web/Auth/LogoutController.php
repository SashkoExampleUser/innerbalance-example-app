<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(): RedirectResponse
    {
        auth('web')->logout();

        return redirect()
            ->route('home');
    }
}
