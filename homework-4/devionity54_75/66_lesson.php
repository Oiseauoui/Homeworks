<?php
/* Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre> 
*/

$regions = array(
'Польша' => array('Краков', 'Варшава', 'Лодзь'),
'Франция' => array('Париж', 'Марсель', 'Лион', 'Тулуза'),
'Испания' => array('Барселона', 'Валенсия', 'Сан-Хосе'),
'Чехия' => array('Прага', 'Бенешов', 'Вальтице', 'Бржецлав')
);

function countries($regions)
{
    $data = '';

    foreach($regions as $country => $cities)
    {   
        $data .= "<h2>$country</h2>";

        foreach($cities as $city)       
            $data .= $city . '<br>';
   }
  
    return $data;
}

echo '<pre>';
echo countries($regions);
echo '</pre>';
