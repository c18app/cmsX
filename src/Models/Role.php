<?php

namespace C18app\Cmsx\Models;

use C18app\Cmsx\Models\Base as Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('C18app\Cmsx\Models\User', $this->table_prefix.'role_user')->withTimestamps();
    }
}
