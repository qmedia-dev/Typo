<?php

// подключаем типограф
require_once("assets/snippets/typo/EMT.php");

// создаём объект
$typograph = new EMTypograph();

// настройки
$options = array(
    'Text.breakline' => $breakline == 'off' ? 'off' : 'on',
    'Text.paragraphs' => $paragraphs == 'on' ? 'on' : 'off',
    'Text.auto_links' => $links == 'off' ? 'off' : 'on',
    'Text.email' => $email == 'off' ? 'off' : 'on',
    'Text.no_repeat_words' => $norepeat == 'on' ? 'on' : 'off',
    'OptAlign.oa_oquote' => $optical == 'on' ? 'on' : 'off',
    'OptAlign.oa_oquote_extra' => $optical == 'on' ? 'on' : 'off',
    'OptAlign.oa_obracket_coma' => $optical == 'on' ? 'on' : 'off'
  );
$typograph->setup($options);

// задаём текст для типографирования
$typograph->set_text("Текст, к которому применить типограф.");

// типографируем
$result = $typograph->apply();

// выводим результат
return $result;