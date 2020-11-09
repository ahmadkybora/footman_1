<?php
namespace App\Models;

use App\Providers\App;
use App\Providers\QueryBuilder;

//use App\Providers\Request;

class Model extends QueryBuilder
{
//    protected $request;
    protected static $table;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

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
//        return parent::find(static::$table, $id);
//    }
//
//    public static function where($key, $value)
//    {
//        return parent::where(static::$table, $key, $value);
//    }
//
//    public static function update($id, $values)
//    {
//        parent::update(static::$table, $id, $values);
//    }
//
//    public static function delete($id)
//    {
//        parent::delete(static::$table, $id);
//    }
}