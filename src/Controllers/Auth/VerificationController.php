<?php

namespace C18app\Cmsx\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\VerificationController as VC;
use C18app\Cmsx\Models\User;

class VerificationController extends VC
{
    protected $redirectTo = '/';

    public function show(Request $request)
    {
        if(User::count()==0) {
            return redirect()->route('home');
        }
        
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view(Config('cmsx.app.template').'::auth.verify');
    }
}
