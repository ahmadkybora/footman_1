<?php
namespace App\Models;

use App\Providers\App;
use App\Providers\QueryBuilder;

class Model
{
    protected static $table;

    public static function all()
    {
        return App::get('Providers')->selectAll(static::$table);
    }

    public static function create($values)
    {
        App::get('Providers')->insert(static::$table, $values);
    }

    public static function find($id)
    {
        return App::get('Providers')->find(static::$table, $id);
    }

    public static function where($key, $value)
    {
        return App::get('Providers')->where(static::$table, $key, $value);
    }

    public static function update($id, $values)
    {
        App::get('Providers')->update(static::$table, $id, $values);
    }

    public static function delete($id)
    {
        App::get('Providers')->delete(static::$table, $id);
    }
}
