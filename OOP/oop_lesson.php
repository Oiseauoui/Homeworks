<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 25.02.2017
 * Time: 10:21
 */
class UserInfo
{
    public $publicVar = 'Hello, my sweet baby';
    private  $privateVar = 'privat var';
    protected $protectedVar;

    public function displayVar($str)
    {

        echo $this->publicVar;
    }

    public function displayPrivateVar()
    {
        return $this->privateVar;
       // var_dump($this);
    }
}


$user = new UserInfo();
//print_r($user); die;
$pv = 'publicVar';
echo $user ->{$pv}; //'Hello, my sweet baby'
//die;
echo '<br>';
echo $user->displayPrivateVar(); die;
$user->displayVar();

echo  $user->publicVar;

//'Инкапсуляция - хранение, защита данных
//Полиморфизм - чего-то много
//Наследование  '