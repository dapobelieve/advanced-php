<?php
require_once('Database.php');

class User
{
    public $id;
    public $username;
    public $first_name;
    public $last_name;
    public $password;

    public static function findAll()
    {
        // pull in the $db from the global scope
        global $db;
        $result = (new self)->findBySql('SELECT * FROM users');
        return $result;
    }

    public static function findById($id = 0)
    {
        global $db;
        $sql = (new self)->findBySql("SELECT * FROM users WHERE id = '$id' ");
        return !empty($sql) ? array_shift($sql) : false;
    }

    public function findBySql($sql)
    {
        global $db;
        $result = $db->query($sql);
        $objectArray = [];
        while ($row = $db->fetchArray($result)){
            $objectArray[] = self::instantiate($row);
        }
        return $objectArray;
    }

    private function hasAttribute($attribute)
    {
        $objectVars = get_object_vars($this);
        return array_key_exists($attribute, $objectVars);
    }

    private static function instantiate($record)
    {
        $object = new self;
        foreach ($record as $attribute => $value) {
            if ($object->hasAttribute($attribute)){
                $object->$attribute = $value;
            }
        }
        return $object;
    }
}


?>