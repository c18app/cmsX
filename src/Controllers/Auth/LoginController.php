<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\LoginController as LC;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends LC
{
    protected $redirectTo = '/';

    public function showLoginForm()
    {
        return view(Config('cmsx.app.template').'::auth.login');
    }
}
