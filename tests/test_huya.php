<?php
include __DIR__ . '/../vendor/autoload.php';
use Rango\Tv\Status;

$url = "http://www.huya.com/cfyimei";

$model = new Status($url);
var_dump($model->isOnline());
/**
 *online: true,
 *offline: false
 */