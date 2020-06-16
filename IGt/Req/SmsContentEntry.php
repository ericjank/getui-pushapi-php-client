<?php

namespace Getui\IGt\Req;

use Getui\Protobuf\PBMessage;

class SmsContentEntry extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields['1'] = 'PBString';
        $this->values['1'] = '';
        $this->fields['2'] = 'PBString';
        $this->values['2'] = '';
    }

    public function key()
    {
        return $this->_get_value('1');
    }

    public function set_key($value)
    {
        return $this->_set_value('1', $value);
    }

    public function value()
    {
        return $this->_get_value('2');
    }

    public function set_value($value)
    {
        return $this->_set_value('2', $value);
    }

}
