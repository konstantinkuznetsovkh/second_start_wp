<?php 
namespace lazy_coder;

use lazy_coder\handlers\EnqueueScripts;
use lazy_coder\handlers\Posttypes;
use lazy_coder\handlers\AjaxAction;

class App {
//создаем метод внутри класса App просто для проверки
// public static function get_hello() {

//     return 'Hello!';
// }
public static function init() {

    //Enqueue scripts
    EnqueueScripts::init();
    // EnqueueScripts::init();
    // EnqueueScripts::init();
    //Posttypes инициализировать нашкласс
    Posttypes::init();

    //подключаем ajax actions
    AjaxAction::init();

    
    }



}


;?>