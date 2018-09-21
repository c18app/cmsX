<?php

namespace C18app\Cmsx\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use \C18app\Cmsx\Traits\PrefixModelTableName;

    protected $fillable = [
        'title',
        'invisible'
    ];

    protected $attributes = [
        'invisible' => 0
    ];

    public function pages()
    {
        return $this->morphedByMany('C18app\Cmsx\Models\Page', 'taggable', $this->table_prefix . 'taggables');
    }

    public function articles()
    {
        return $this->morphedByMany('C18app\Cmsx\Models\Article', 'taggable', $this->table_prefix . 'taggables');
    }
}
