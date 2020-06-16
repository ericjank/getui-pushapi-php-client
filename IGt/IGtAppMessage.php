<?php

namespace Getui\IGt;

use Getui\IGt\IGtMessage;

class IGtAppMessage extends IGtMessage
{
    /** @var array $appIdList */
    public $appIdList;
    public $tagList;
    public $conditions;
    public $speed = 0;
    public $pushTime;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_appIdList()
    {
        return $this->appIdList;
    }

    public function set_appIdList($appIdList)
    {
        $this->appIdList = $appIdList;
    }

    public function get_conditions()
    {
        return $this->conditions;
    }

    /**
     * @return mixed
     */
    public function getPushTime()
    {
        return $this->pushTime;
    }

    /**
     * @param mixed $pushTime
     */
    public function setPushTime($pushTime)
    {

        $this->pushTime = $pushTime;
    }

    public function set_conditions($conditions)
    {
        $this->conditions = $conditions;
    }

    public function get_speed()
    {
        return $this->speed;
    }

    public function set_speed($speed)
    {
        $this->speed = $speed;
    }

}
