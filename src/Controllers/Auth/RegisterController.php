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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if (User::all()->count() == 1) {
            $admin_role = Role::where('name', 'owner')->first();
            if(!$admin_role) {
                Request::session()->flash('error',
                    'Uživatel byl úspěšně vytvořený! Nepodařilo se vytvořit uživatele s rolí owner!');
            } else {
                $admin_role->users()->attach($user->id);
                $this->redirectTo = 'admin/dashboard';
                Request::session()->flash('confirm',
                    'Uživatel byl úspěšně vytvořený! Jako první uživatel máte roli owner!');
            }
        } else {
            Request::session()->flash('confirm', 'Uživatel byl úspěšně vytvořený!');
        }

        return $user;
    }

    public function showRegistrationForm()
    {
        if(User::count()==0) {
            return redirect()->route('home');
        }

        return view(Config('cmsx.app.template') . '::auth.register');
    }
}
