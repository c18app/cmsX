<?php

namespace C18app\Cmsx\Controllers\Auth;

use App\Http\Controllers\Auth\RegisterController as RC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use C18app\Cmsx\Models\Role;
use C18app\Cmsx\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Carbon;

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
            if (!$admin_role) {
                Request::session()->flash('error',
                    'Uživatel byl úspěšně vytvořený! Nepodařilo se vytvořit uživatele s rolí owner!');
            } else {
                $user->roles()->attach($admin_role->id);
                $user->email_verified_at = Carbon::now();
                $user->save();
                $this->redirectTo = 'admin/dashboard';
                Request::session()->flash('confirm',
                    'Uživatel byl úspěšně vytvořený! Jako první uživatel máte roli owner!');
            }
        } else {
            $guest_role = Role::where('name', 'guest')->first();
            if (!$guest_role) {
                Request::session()->flash('error',
                    'Uživatel byl úspěšně vytvořený! Nepodařilo se vytvořit uživatele s rolí guest!');
            } else {
                $user->roles()->attach($guest_role->id);
                Request::session()->flash('confirm',
                    'Uživatel byl úspěšně vytvořený s rolí quest!');
            }
        }

        return $user;
    }

    public function showRegistrationForm()
    {
        if (User::count() == 0) {
            return redirect()->route('home');
        }

        return view(Config('cmsx.app.template') . '::auth.register');
    }
}
