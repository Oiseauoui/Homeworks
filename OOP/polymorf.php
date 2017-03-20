<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 25.02.2017
 * Time: 11:04
 */

//'Полиморфизм';


class BaseUser
{
    private $firstName;
    private $lastName;

    public function  __construct()
    {
        $this->setLastName('Popov');
        print "Constructor" . __CLASS__;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public  function setFirstName($value)

    {
        $this->firstName = $value;
        return $this;
    }
    public  function getLastName()
    {
        return $this->lastName;
    }
    public  function setLastName($value)
    {
        $this->lastName = $value;
        return $this;
    }
}

class Admin extends BaseUser

{

    private  function  canDelete()
    {
        return true;
    }
}

class Moderator  extends Admin
{
    protected $firstName;

private  function canDelete()
{
    return false;
}
}



class User extends BaseUser
{

}

$admin = new Admin();
$admin->setFirstName('Andrew');
$admin->setLastName ('Popov');
echo $admin->getFirstName();
echo $admin->getLastName();

$user = new User();
$user->setFirstName('Andrew');
$user->setLastName ('Popov');
echo $user->getFirstName();
echo $user->getLastName();

$moderator = new Moderator();
$moderator->setFirstName('Andrew');
$moderator->setLastName ('Popov');
echo $moderator->getFirstName();
echo $moderator->canDelete();