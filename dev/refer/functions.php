<?php

//if ($_SERVER['REMOTE_ADDR'] == '195.20.194.197') {
//    var_dump($_REQUEST);
//}

define('FILE_ROOT', dirname(__FILE__) . '/');

require(FILE_ROOT . 'phones.php');

function isReferYandex() {
    $refer = $_SERVER['HTTP_REFERER'];

    if (stripos('yandex', $refer) !== false)
        return true;

    return false;
}

function isReferGoogle() {
    $refer = $_SERVER['HTTP_REFERER'];

    if (stripos('google', $refer) !== false)
        return true;

    return false;
}

function isReferDirect() {
    $refer = $_SERVER['HTTP_REFERER'];

    if (stripos('direct', $refer) !== false)
        return true;

    if ($_REQUEST['utm_source'] == 'yd_reg')
        return true;

    if ($_REQUEST['utm_type'] == 'search')
        return true;

    if ($_REQUEST['utm_type'] == 'context')
        return true;

    return false;
}

function isReferAdwords() {
    $refer = $_SERVER['HTTP_REFERER'];

    if (stripos('adwords', $refer) !== false)
        return true;

    if ($_REQUEST['utm_source'] == 'gadwords')
        return true;

    return false;
}

function is2gis() {
    $refer = $_SERVER['HTTP_REFERER'];

    if (stripos('2gis', $refer) !== false)
        return true;

    return false;
}

function getPhone() {

    global $phones;

    // Проверяем телефон в куках
    $cookiePhone = getCookiePhone();
    //var_dump($cookiePhone);
    if (!empty($cookiePhone))
        return $cookiePhone;

    // Определяем
    if (isReferDirect() and ! empty($phones['direct']))
        $phone = $phones['direct'];
    elseif (isReferAdwords() and ! empty($phones['adwords']))
        $phone = $phones['adwords'];
    elseif (isReferYandex() and ! empty($phones['yandex']))
        $phone = $phones['yandex'];
    elseif (isReferGoogle() and ! empty($phones['google']))
        $phone = $phones['google'];
    elseif (is2gis() and ! empty($phones['2gis']))
        $phone = $phones['2gis'];
    else
        $phone = $phones['default'];
//var_dump($phone);
    // Сохраняем куку
    setCookiePhone($phone);

    return $phone;
}

function getPhoneSystem($phone) {
    return str_replace(array(' ', '-', '(', ')'), '', $phone);
}

function getPhoneCode($phone) {
    $temp = explode(' ', $phone);
    return $temp[1];
}

function getPhoneNumber($phone) {
    $temp = explode(' ', $phone);
    return $temp[2];
}

function setCookiePhone($phone) {
    setcookie('phone', $phone,0,'/');
}

function getCookiePhone() {
    return $_COOKIE['phone'];
}

?>