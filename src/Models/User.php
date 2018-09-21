<?php

namespace C18app\Cmsx\Models;

use Illuminate\Database\Eloquent\Model;

class User extends \App\User
{
    public function roles()
    {
        return $this->belongsToMany('C18app\Cmsx\Models\Role', \Config::get('cmsx.table_prefix') . 'role_user')->withTimestamps();
    }
}
