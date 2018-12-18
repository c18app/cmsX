<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\ForgotPasswordController as FPC;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends FPC
{
    public function showLinkRequestForm()
    {
        return view(Config('cmsx.app.template').'::auth.passwords.email');
    }
}
