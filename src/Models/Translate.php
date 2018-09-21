<?php

namespace C18app\Cmsx\Models;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use \C18app\Cmsx\Traits\PrefixModelTableName;
    
    protected $fillable = [
        'title',
        'content',
    ];
}
