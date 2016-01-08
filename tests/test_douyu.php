<?php
include __DIR__ . '/../vendor/autoload.php';
use Rango\Tv\Status;

$url = "http://www.douyutv.com/512594";

$model = new Status($url);
var_dump($model->isOnline());
/**
 *online: true,
 *offline: false
 */