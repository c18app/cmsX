<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\ForgotPasswordController as FPC;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use C18app\Cmsx\Models\User;

class ForgotPasswordController extends FPC
{
    public function showLinkRequestForm()
    {
        if(User::count()==0) {
            return redirect()->route('home');
        }

        return view(Config('cmsx.app.template').'::auth.passwords.email');
    }
}
