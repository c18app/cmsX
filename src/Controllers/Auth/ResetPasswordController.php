<?php

namespace C18app\Cmsx\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ResetPasswordController as RPC;
use C18app\Cmsx\Models\User;

class ResetPasswordController extends RPC
{
    protected $redirectTo = '/';

    public function showResetForm(Request $request, $token = null)
    {
        if(User::count()==0) {
            return redirect()->route('home');
        }

        return view(Config('cmsx.app.template').'::auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
