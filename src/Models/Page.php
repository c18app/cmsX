<?php

namespace C18app\Cmsx\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use C18app\Cmsx\Traits\Sort;

class Page extends Model
{
    use \C18app\Cmsx\Traits\PrefixModelTableName;
    use SoftDeletes;
    use Sort;

    protected $fillable = [
        'title',
        'content',
    ];

    protected $attributes = [
        'order' => 0
    ];

    public function getUrl()
    {
        return route('cms.page', ['id' => $this->id, 'slug' => str_slug($this->title)]);
    }

    public function tags()
    {
        return $this->morphToMany('C18app\Cmsx\Models\Tag', 'taggable', $this->getTablePrefix() . 'taggables');
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }
}
