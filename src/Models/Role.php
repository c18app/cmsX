<?php

namespace C18app\Cmsx\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use \C18app\Cmsx\Traits\PrefixModelTableName;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('C18app\Cmsx\Models\User', $this->table_prefix.'role_user')->withTimestamps();
    }
}
