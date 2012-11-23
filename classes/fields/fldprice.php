<?php defined('SYSPATH') or die('No direct script access.');

class Fields_FldPrice extends Fields {

    /**
     * Заголовки таблиц
     * 
     * @return array 
     */
    public function get_fields($key)
    {
        $fields = array(
            0=>array(
                'name'=>'rayon',
                'title'=>'Район',
            ),
            1=>array(
                'name'=>'addres',
                'title'=>'Улица, дом',
            ),
            2=>array(
                'name'=>'type',
                'title'=>'Тип',
            ),
            3=>array(
                'name'=>'floor',
                'title'=>'Этаж',
            ),
            4=>array(
                'name'=>'square',
                'title'=>'Площадь',
            ),
            5=>array(
                'name'=>'price',
                'title'=>'Цена, руб',
            ),
            6=>array(
                'name'=>'phone',
                'title'=>'Конт. телефон',
            ),
            7=>array(
                'name'=>'photo',
                'title'=>'Фото',
            )
        );
        switch ($key)
        {
            case 8: 
            case 10: 
                $fields[3]['title'] = 'Зем. уч.';
            break;
            case 9: 
                unset($fields[2],$fields[3],$fields[4]);
            break;
            case 11: 
                unset($fields[2],$fields[3]);
            break;
        }
        return $fields;
    }
} 
