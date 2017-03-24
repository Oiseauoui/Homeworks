<?php

/*Создать класс со статическим свойством,
 которое будет содержать значение количества
созданных экземпляров.
*/?>
<!DOCTYPE html>
<html>
<head>
    <title>Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<p>
    <?php
    class A
{
     public static $count = 0; //

        public function __construct()
        {
        $this::$count++;

}
        	public function __destruct()
        	{
        	$this::$count--;
	/*{
		die(' Goodbye');
	}
*/
    }
}

$a = new A;
$b = new A;
$c = new A;

$d = A::$count;

 echo "Создано $d объектов";

?>
</p>
</body>
</html>