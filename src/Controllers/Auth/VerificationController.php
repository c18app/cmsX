<?php

namespace C18app\Cmsx\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\VerificationController as VC;

class VerificationController extends VC
{
    protected $redirectTo = '/';

    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view(Config('cmsx.app.template').'::auth.verify');
    }
}
