<?php

require_once __DIR__.'/../vendor/autoload.php';

use Mickeywaugh\Captcha\CaptchaBuilder;

$captcha = new CaptchaBuilder;
$captcha
    ->build()
    ->save('out.jpg')
;
