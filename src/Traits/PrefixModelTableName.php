<?php

namespace C18app\Cmsx\Traits;

use Illuminate\Support\Str;

trait PrefixModelTableName
{
    protected $table_prefix = '';

    public function getTablePrefix()
    {
        return \Config::get('cmsx.table_prefix');
    }

    public function getTable()
    {
        if (!isset($this->table)) {
            return $this->getTablePrefix() . str_replace('\\', '', Str::snake(Str::plural(class_basename($this))));
        }

        return $this->table;
    }
}