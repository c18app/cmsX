<?php

namespace C18app\Cmsx\Traits;

use Illuminate\Support\Str;

trait PrefixModelTableName
{
    protected $table_prefix = '';

    public function getTable()
    {
        $this->table_prefix = \Config::get('cmsx.table_prefix');

        if (!isset($this->table)) {
            return $this->table_prefix . str_replace('\\', '', Str::snake(Str::plural(class_basename($this))));
        }

        return $this->table;
    }
}