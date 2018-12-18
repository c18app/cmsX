<?php

namespace C18app\Cmsx\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ResetPasswordController as RPC;

class ResetPasswordController extends RPC
{
    protected $redirectTo = '/';

    public function showResetForm(Request $request, $token = null)
    {
        return view(Config('cmsx.app.template').'::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
