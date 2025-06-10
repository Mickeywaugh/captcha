<?php

require_once __DIR__.'/../vendor/autoload.php';

use Mickeywaugh\PhpCaptcha\CaptchaBuilder;

echo count(CaptchaBuilder::create()
    ->build()
    ->getFingerprint()
);

echo "\n";
