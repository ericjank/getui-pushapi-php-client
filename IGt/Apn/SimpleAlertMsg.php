<?php

namespace Getui\IGt\Apn;

use Getui\IGt\Apn\ApnMsg;

class SimpleAlertMsg implements ApnMsg
{
    public $alertMsg;

    public function get_alertMsg()
    {
        return $this->alertMsg;
    }

}
