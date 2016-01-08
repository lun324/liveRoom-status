<?php
include __DIR__ . '/../vendor/autoload.php';
use Rango\Tv\Status;

$url = "http://www.zhanqi.tv/199716com";

$model = new Status($url);

var_dump($model->isOnline());

/**
 *online: true,
 *offline: false
 */