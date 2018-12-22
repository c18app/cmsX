<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\LoginController as LC;
use Illuminate\Http\Request;
use C18app\Cmsx\Models\User;

class LoginController extends LC
{
    protected $redirectTo = '/';

    public function showLoginForm()
    {
        if(User::count()==0) {
            return redirect()->route('home');
        }

        return view(Config('cmsx.app.template') . '::auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->roles()->whereIn('name', ['owner', 'admin'])->count()) {
            $this->redirectTo = '/admin/dashboard';
        }
    }
}
