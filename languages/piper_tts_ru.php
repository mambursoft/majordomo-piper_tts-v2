<?php
$dictionary=array(
'PIPER_TTS_ENDPOINT'=>'Адрес API',
'PIPER_TTS_METHOD'=>'HTTP-метод',
'PIPER_TTS_TOKEN'=>'Токен доступа',
'PIPER_TTS_REGION'=>'Регион / маршрут',
'PIPER_TTS_TRACKING'=>'Номер отправления',
'PIPER_TTS_PAYLOAD'=>'Шаблон POST-запроса',
'PIPER_TTS_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'PIPER_TTS_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}