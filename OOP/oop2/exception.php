<?php

use Exception\DBException;
use Exception\Extended\DBException as ExtendedDBException;

function autoloadException($name)
{
    $file = __DIR__ . '/Src/' . $name . '.php';

    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('autoloadException');

class DB
{
    public function connect()
    {
        throw new ExtendedDBException();
    }
}



class User
{
    private $firstName = 'oleg';
    private $lastName = 'Ivanov';

    public function __get($fieldName)
    {
        return $this->$fieldName;
    }

    public function __set($fieldName, $value)
    {
        $this->$fieldName = $value;
    }

    private function __clone()
    {
        return 20;
    }

    public function __call($methodName, $args)
    {
        if ($methodName == 'clone') {
            return clone $this;
        }
    }

    public static function __callStatic($methodName, $args)
    {
        if ($methodName == 'cloneMethod') {
        }
    }

    public function find()
    {
        return ['name' => 'Andrew', 'role' => 'superadmin'];
//        throw new UserException();
    }

    public function prepare($user)
    {
        switch ($user['role']) {
            case 'admin':
                $user['name'] .= '(admin)';
                break;
            default:
                throw new InvalidArgumentException();
        }

        return $user;
    }
}


try {
    $connection = (new DB())->connect();
    $user = new User();
    $newUser = $user::cloneMethod();
    var_dump($newUser);
    die;
die;
    $data = $user->find('vasya');
//    $data = $user->prepare($data);

} catch (MyDBException $e) {
    echo 'wrong db';
} catch (UserException $e) {
    echo 'wrong user';
} catch (InvalidArgumentException $e) {
    echo 'invalid argument';
}


