<?php
/*  Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r. 
 По умолчанию использовать print_r
 */


$regions = array(
'Польша' => array('Краков', 'Варшава', 'Лодзь'),
'Франция' => array('Париж', 'Марсель', 'Лион', 'Тулуза'),
'Испания' => array('Барселона', 'Валенсия', 'Сан-Хосе'),
'Чехия' => array('Прага', 'Бенешов', 'Вальтице', 'Бржецлав')
);

function countries($regions, array $another1 = ['Украина' => array('Киев', 'Днепр', 'Одесса')], 
array $another2 = ['Испания' => array ('Мадрид', 'Гранада', 'Барселона')])
{
    $data = '';
	var_dump ($regions, $another1, $another2);
     
    foreach($regions as $country => $cities)
    {   
        $data .= "<h2>$country</h2>";

        foreach($cities as $city)       
            $data .= $city . "<br>" ;
   }
  
    return $data;
}

echo '<pre>';
countries($regions);
echo '</pre>';
