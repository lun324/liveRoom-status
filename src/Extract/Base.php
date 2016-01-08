<?php
namespace Rango\Tv\Extract;

use GuzzleHttp\Client;

Abstract class  Base
{

    protected $url;

    protected $httpClient;

    public function __construct($url)
    {
        $this->url = $url;
        $this->httpClient = new Client();
    }

    //获取内容
    public function getContent()
    {
        $response = $this->httpClient->request('GET', $this->url);
        return $response->getBody()->getContents();
    }


    //实现isOnline接口
    abstract protected function isOnline();

}