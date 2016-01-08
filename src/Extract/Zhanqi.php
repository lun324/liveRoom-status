<?php
namespace Rango\Tv\Extract;

class Zhanqi extends Base
{
    //直播状态
    const STATUS_ONLINE = 1;

    //非直播状态
    const STATUS_OFFLINE = 0;

    //匹配
    const MATCH = '%chatStatus":"([^"]+)"%';

    /**
     * 重载父类构造函数
     */
    public function __construct($url)
    {
        parent::__construct($url);
    }

    /**
     * 判断是否在线
     */
    public function isOnline()
    {
        $content = $this->getContent();
        if ($content) {
            if (preg_match(self::MATCH, $content, $match)) {
                $showStatus = $match[1];
                if (intval($showStatus) === self::STATUS_ONLINE) {
                    return true;
                }
            }
        }
        return false;
    }

}