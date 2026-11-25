<?php
$dictionary=array(
'PIPER_TTS_ENDPOINT'=>'Адреса API',
'PIPER_TTS_METHOD'=>'HTTP-метод',
'PIPER_TTS_TOKEN'=>'Токен доступу',
'PIPER_TTS_REGION'=>'Регіон / маршрут',
'PIPER_TTS_TRACKING'=>'Номер відправлення',
'PIPER_TTS_PAYLOAD'=>'Шаблон POST-запиту',
'PIPER_TTS_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'PIPER_TTS_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}