<?php defined('SYSPATH') or die('No direct script access.');

class Model_ModMain extends Model {

    /**
     * Контактные телефоны в шапке сайта
     * 
     * @return type 
     */
    public function get_phones()
    {
        return array(
            array('code'=>'3435','num'=>'92-16-16'),
            array('code'=>'3435','num'=>'36-33-27')
        );
    }
    /**
     * Верхнее меню
     * 
     * @return type 
     */
    public function get_menues()
    {
        return array(
            array('href'=>'#katalog-kvartir','title'=>'Сегодня<br /> на продаже'),
            array('href'=>'#perechen-uslug','title'=>'Услуги'),
            array('href'=>'#katalog-kvartir','title'=>'Купим<br /> для клиентов'),
            array('href'=>'','title'=>'Объявления<br /> от посетителей сайта')
        );
    }

    /**
     * Данные риелтора
     * 
     * @return type 
     */
    public function get_realtor()
    {
        return array(
            'image'=>'img/realtor_001.png',
            'fio'=>'Михалева <br /> Ирина <br /> Ивановна',
            'phone'=>'т.+7(912)659 90 48',
            'all'=>array(
                'href'=>'vse-rielteri.html',
                'src'=>'img/realtor_all.png',
            )
        );
    }

    /**
     * Срочно купим для наших клиентов
     *
     * @return array
     */
    public function get_quicklies()
    {
        return array(
            array(
                'text'=>'1 комнатную квартиру (возможно, хрущевку) или малосемейку на Вагонке',
                'phone'=>'+7 912 659 9048',
            ),
            array(
                'text'=>'2-х комнатную квартиру на Вагонке, желательно, улучшенной планировки',
                'phone'=>'+7 912 659 9048',
            ),
            array(
                'text'=>'3-х комнатную квартиру в центре Вагонки',
                'phone'=>'+7 912 659 9048',
            )
        );
    }

} 
