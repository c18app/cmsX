<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\RegisterController as RC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use C18app\Cmsx\Models\Role;
use C18app\Cmsx\Models\User;
use Illuminate\Support\Facades\Request;

class RegisterController extends RC
{
    protected $redirectTo = '/';

    protected function create(array $data)
    {
        $user = parent::create($data);

        if (User::all()->count() == 1) {
            $admin_role = Role::where('name', 'superadmin')->first();
            if(!$admin_role) {
                Request::session()->flash('error',
                    'Uživatel byl úspěšně vytvořený! Nepodasřilo se vytvořit superadministrátorský přístup!');
            } else {
                $admin_role->users()->attach($user->id);
                $this->redirectTo = 'admin/dashboard';
                Request::session()->flash('confirm',
                    'Uživatel byl úspěšně vytvořený! Jako první uživatel máte superadministrátorský přístup!');
            }
        } else {
            Request::session()->flash('confirm', 'Uživatel byl úspěšně vytvořený!');
        }

        return $user;
    }

    public function showRegistrationForm()
    {
        return view(Config('cmsx.app.template') . '::auth.register');
    }
}
