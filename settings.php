<?php
//Общие настройки для вайта и блэка
$thankyou_page_path='thankyou.html'; //путь к странице спасибо

//Настройка вайта
//если 'site' - показывает локальный вайт-пейдж из папки $white_folder_name 
//если 'redirect' - редиректит на $redirect_url при помощи $redirect_type
//если 'curl' - подгружает $curl_url
//если 'error' - возвращает ошибку $error_code
$white_action = 'site'; 
$white_folder_name = 'white'; //папка, где лежит вайтпейдж
$white_redirect_url = 'http://ya.ru';
$white_redirect_type = 302; //можно использовать 301 или 302 редирект, 303 и 307 тоже катят.
$white_curl_url = 'https://ya.ru';
$white_error_code = 404; //код ошибки для возврата вместо вайта, по умолчанию 404 = Not Found

//Настройка блэка
$black_action = 'site'; //по аналогии с white_action 'site' или 'redirect'
//папка, где лежит прокла или набор прокл через запятую (для сплит-теста), если проклы не нужны - ставим ''
$black_preland_folder_name = 'p1,p2'; 
//папка, где лежит основной ленд или набор папок через запятую (для сплит-теста)
$black_land_folder_name = 'land'; 
$black_land_conversion_script='order.php'; //название файла скрипта отправки лидов на ленде ПП
$black_redirect_url = 'http://ya.ru';
$black_redirect_type = 302; //можно использовать 301 или 302 редирект, 303 и 307 тоже катят.

//Настройка метрик и пикселей
$gtm_id=''; //идентификатор Google Tag Manager
$ya_id=''; //идентификатор Яндекс.Метрики
$fb_use_pageview = true; //добавлять ли на проклы-ленды событие PageView
$fb_thankyou_event = 'Lead'; //какое событие будем посылать со страницы Спасибо (Обычно Lead или Purchase)

//Настройка TDS
$full_cloak_on = false; //если true, то всегда возвращает whitepage, используем при модерации
$disable_tds = false; //если true, то всегда показывает блэк
$log_password = '12345'; //пароль для просмотра лог-файла трафика, добавлять как: /logs?password=xxxxx

//Настройка фильтров
$os_white = 'Android,iOS,Windows,OS X'; //Список разрешённых ОС
$country_white = 'RU,RS'; //Строка двухбуквенных обозначений стран через запятую, допущенных к blackpage
$ip_black = '0.0.0.1'; //Доп. список адресов через запятую, которые будут отправлены на white page
$tokens_black = ''; //Список слов через запятую, при наличии которых в адресе перехода (в ссылке, по которой перешли), юзер будет отправлен на whitepage
$ua_black = 'facebook,Facebot,curl,gce-spider,yandex.com/bots'; //Список слова через запятую, при наличии которых в UserAgent, юзер будет отправлен на whitepage
$block_without_referer = false; //при =true все запросы без referer будут идти на whitepage

//Настройка суб-меток
//Кло берёт из адресной строки те субметки, что слева и записывает их значения в каждую форму на ленде в поля с именами, которые справа
//Таким образом мы передаём значения субметок в ПП, чтобы в стате ПП отображалась нужная нам инфа 
//Ну и чтобы передавать subid для постбэка
//Есть 3 "зашитые" метки: 
//- subid - уникальный идентификатор пользователя, 
//- prelanding - названием папки преленда
//- landing - название папки ленда
//Пример: 
//у вас в адресной строке было http://xxx.com?cn=MyCampaign
//в форме на ленде добавится <input type="hidden" name="utm_campaign" value="MyCampaign"/>
$sub_ids = array(
	"subid"=> "sub_id",
	"prelanding" => "utm_source",
	"cn" => "utm_campaign",
	"an" => "utm_content"
);

//Настройка дополнительных скриптов: скрипты добавляются и на прокладки и на лендинги, если нет доп.указаний в описании
$disable_back_button = false; //запрещает нажимать кнопку назад, она тупо перестаёт работать
$replace_back_button = true; //заменяет действие кнопки назад на адрес $replace_back_address. НЕ ВКЛЮЧАТЬ вместе с disable_back_button!
$replace_back_address = 'http://ya.ru'; //куда направлять при нажатии Назад. Можно направлять на другой похожий оффер
$disable_text_copy = false; //запрещает выделять и сохранять текст по Ctrl+S, убирает контекстное меню
$replace_prelanding = true; //если true, то при щелчке на любую ссылку на прокле ленд будет открыт в новом окне, а прокла будет заменена на $replace_prelanding_address
$replace_prelanding_address = 'http://ya.ru';
?>