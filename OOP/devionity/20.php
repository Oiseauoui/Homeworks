<?php

/*Создать класс Fraction, который моделирует
 простую дробь с числителем и знаменателем.
Определить методы конструктор, сокращения дроби
 и представления дроби в десятичном виде.
 Определить статические методы для арифметических
операций с двумя дробями.
*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<p>
    <?php
    class Fraction  { //Дробь
    private $ch,$zn; //Числитель и знаменатель
    function __construct ($ch=1,$zn=1) { //конструктор
        $this->ch =  abs(intval($ch)); $this->zn =  abs(intval($zn));
    }
    function get() { //Вернуть дробь строкой вида "12/34"
        return ( $this->zn == 0 ? '&infin;' :
            ($this->ch==$this->zn ? '1' : $this->ch.'/'.$this->zn) );
    }
    private function nod($ch,$zn) { //Найти НОД
        return ($ch ? $this->nod($zn%$ch,$ch) : $zn);
    }
    function cut() { //Сократить, если есть НОД>1
        $nod = $this->nod($this->ch,$this->zn);
        if ($nod>1) { $this->ch/=$nod; $this->zn/=$nod; }
    }
    function dec($signs=3) { //Десятичное представление с $signs знаками в дробной части (округление)
        return ($this->zn == 0 ? '&infin;' : round($this->ch/$this->zn,$signs));
    }
    function error($er=1) {
        //Примерное десятичное представление дробью $er степени десятки ($er>0), вернёт оценку погрешности
        if ($this->zn == 0) return '&infin;';
        $dec = $this->ch/$this->zn;
        $dec2 = preg_replace("/^(.*[,\.]\d{0,".$er."}).*$/","$1","$dec");
        $this->ch=$dec2*pow(10,$er);
        $this->zn=pow(10,$er);
        return round(abs($dec-$this->ch/$this->zn),$er);
    }

	public static $varMe = 0;
	public static function getVar() {
		return A::$varMe;
	}
	public function iterVar() {
		static::$varMe += 1;
	}
}

$n = new Fraction(68,22);
echo '<br>Исходная дробь: '.$n->get();
$n->cut();
echo '<br>Сокращённая дробь: '.$n->get();
echo '<br>В десятичном виде: '.$n->dec();
$e=$n->error(1);

$obj1 = new Fraction();
$obj2 = new Fraction();

$obj1->iterVar();
$obj2->iterVar();
echo "<br>";
var_dump(Fraction::$varMe); // 2

//echo '<br>Приблизительно равно: '.$n->get().' с погрешностью '.$e;
//echo '<br>Приблизительно равно: '.$n->get().' с погрешностью '.$e;


?>
</p>
</body>
</html>