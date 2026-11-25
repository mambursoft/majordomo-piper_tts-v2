<?php
$dictionary=array(
'PIPER_TTS_ENDPOINT'=>'API endpoint',
'PIPER_TTS_METHOD'=>'HTTP method',
'PIPER_TTS_TOKEN'=>'Access token',
'PIPER_TTS_REGION'=>'Region / route',
'PIPER_TTS_TRACKING'=>'Tracking number',
'PIPER_TTS_PAYLOAD'=>'POST payload template',
'PIPER_TTS_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'PIPER_TTS_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}