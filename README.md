# 直播网站房间状态监测

目前适用于 战旗，虎牙，斗鱼 直播网站。

## 安装

    php composer.phar require Rango/Tv


## 使用说明

```php

include __DIR__ . '/vendor/autoload.php';
use Rango\Tv\Status;

//huya
$url = "http://www.huya.com/cfyimei";

//zhanqi
$url = "http://www.zhanqi.tv/199716com";

//douyu
$url = "http://www.douyutv.com/512594";

$model = new Status($url);

$status = $model->isOnline();

var_dump($status); //Boolean, true or false

```