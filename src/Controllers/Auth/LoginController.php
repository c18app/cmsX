<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\LoginController as LC;
use Illuminate\Http\Request;

class LoginController extends LC
{
    protected $redirectTo = '/';

    public function showLoginForm()
    {
        return view(Config('cmsx.app.template') . '::auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->roles()->whereIn('name', ['owner', 'admin'])->count()) {
            $this->redirectTo = '/admin/dashboard';
        }
    }
}
