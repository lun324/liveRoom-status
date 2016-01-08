<?php
namespace Rango\Tv;
class Status
{

    protected $extractors = [];

    protected  $url;

    public function __construct($url)
    {
        $this->url = $url;
        $this->extractors = require __DIR__ . '/config.php';
    }

    public function isOnline()
    {
        return $this->adapter();
    }

    /**
     * 适配器
     */
    public function adapter()
    {
        $url = $this->url;
        if (! filter_var($url, FILTER_VALIDATE_URL) ) {
            //非法url
            return false;
        }
        $urlHost = parse_url($url, PHP_URL_HOST);
        $model = "";
        foreach ($this->extractors as $key => $item) {
            if ($key == str_replace('www.', '',$urlHost)) {
                $model = $item['class'];
                break;
            }
        }
        if ($model) {
            return (new $model($url))->isOnline();
        }
        return false;
    }

}