<?php

namespace C18app\Cmsx\Models;

use C18app\Cmsx\Models\Base as Model;
use C18app\Cmsx\Traits\HasRoles;

class User extends \App\User
{
    use HasRoles;
}
