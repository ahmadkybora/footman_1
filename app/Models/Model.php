<?php
namespace App\Models;

use App\Providers\EloquentBuilder;

class Model extends EloquentBuilder
{
    protected static $table = 'users';

    public static function all()
    {
        return parent::selectAll(static::$table);
    }

    public static function create($values)
    {
        parent::insert(static::$table, $values);
    }

//    public static function find($id)
//    {
//        return static::find(static::$table, $id);
//    }
//
//    public static function where($key, $value)
//    {
//        return static::where(static::$table, $key, $value);
//    }
//
//    public static function update($id, $values)
//    {
//        static::update(static::$table, $id, $values);
//    }
//
//    public static function delete($id)
//    {
//        static::delete(static::$table, $id);
//    }
}