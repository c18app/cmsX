<?php

namespace C18app\Cmsx\Models;

use C18app\Cmsx\Models\Base as Model;
use C18app\Cmsx\Traits\HasRoles;

class User extends \App\User
{
    public function roles()
    {
        return $this->belongsToMany('C18app\Cmsx\Models\Role', \Config::get('cmsx.table_prefix') . 'role_user')->withTimestamps();
    }
}
