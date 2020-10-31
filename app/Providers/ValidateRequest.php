<?php

/**
 * Algorithm: ahmad montazeri.
 * Development: ahmad montazeri.
 * Created At: 10/31/2020 15:00 PM by ahmad montazeri
 * Modified At:.
 *
 * this class for request validation
 */
namespace App\Providers;

use Illuminate\Database\Capsule\Manager as DB;

class ValidateRequest extends Provider
{
    private static $error = [];


    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:00 PM by ahmad montazeri
     * Modified At:.
     * 
     * return true if there is validation error
     * 
     * @return bool
     */
    public static function hasError()
    {
        return count(self::$error) > 0 ? true : false;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:00 PM by ahmad montazeri
     * Modified At:.
     * 
     * return all validation errors
     *
     * @return array
     */
    public function getErrorMessage()
    {
        return self::$error;
    }

    //
    // this methods for validation request
    //

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:11 PM by ahmad montazeri
     * Modified At:.
     *
     * this method for validation unique
     *
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public function unique($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
            return !DB::table($rule)->where($column, $value)->exists();
        return true;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:11 PM by ahmad montazeri
     * Modified At:.
     *
     * this method for required validation
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public static function required($column, $value, $rule)
    {
        return $value != null and !empty(trim($value));
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:11 PM by ahmad montazeri
     * Modified At:.
     *
     * this method for validation minLength
     *
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public static function minLength($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
            return strlen($value) >= $rule;
        return true;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:14 PM by ahmad montazeri
     * Modified At:.
     *
     * this method for validation maxLength
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public static function maxLength($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
            return strlen($value) <= $rule;
        return true;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:11 PM by ahmad montazeri
     * Modified At:.
     *
     * this method for validation email
     *
     * @param $column
     * @param $value
     * @param $rule
     * @return bool|mixed
     */
    public static function email($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
            return filter_var($value,FILTER_VALIDATE_EMAIL);
        return true;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:10 PM by ahmad montazeri
     * Modified At:.
     *
     * this method for validation all
     *
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public static function mixed($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
        {
            if(!preg_match("/^[A-Za-z0-9 .,_~-!@#&%^'*(\)]+$/", $value))
                return false;
        }

        return true;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:00 PM by ahmad montazeri
     * Modified At:.
     * 
     * this method for validation string
     * 
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public function string($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
        {
            if(!preg_match("/^[A-Za-z ]+$/", $value))
                return false;
        }

        return true;
    }

    /**
     * Algorithm: ahmad montazeri.
     * Development: ahmad montazeri.
     * Created At: 10/31/2020 09:00 PM by ahmad montazeri
     * Modified At:.
     * 
     * this method for numeric validation
     * 
     * @param $column
     * @param $value
     * @param $rule
     * @return bool
     */
    public static function numeric($column, $value, $rule)
    {
        if($value != null and !empty(trim($value)))
        {
            if(!preg_match("/^[0-9.]+$/", $value))
                return false;
        }

        return true;
    }
}