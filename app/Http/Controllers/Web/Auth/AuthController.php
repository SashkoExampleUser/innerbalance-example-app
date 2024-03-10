<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function __invoke(AuthRequest $request): RedirectResponse
    {
        if ($this->loginAttempt($request)) {
            return redirect()
                ->route('home');
        }

        return redirect()
            ->back()
            ->withInput($request->only('email'))
            ->withErrors([
                'login' => 'The provided credentials do not match our records.'
            ]);
    }

    private function loginAttempt(AuthRequest $request): bool
    {
        return auth()->attempt(
            $this->credentials($request),
        );
    }

    private function credentials(AuthRequest $request): array
    {
        return [
            'email' => $request->get('login'),
            'password' => $request->get('password'),
        ];
    }
}
