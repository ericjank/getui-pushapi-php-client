<?php

namespace Getui\IGt\Req;

use Getui\Protobuf\PBMessage;

class StartMMPBatchTask extends PBMessage
{
    public $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;

    public function __construct($reader = null)
    {
        parent::__construct($reader);
        $this->fields['1'] = '\\Getui\\IGt\\Req\\MMPMessage';
        $this->values['1'] = '';
        $this->fields['2'] = '\\Getui\\Protobuf\\Type\\PBInt';
        $this->values['2'] = '';
        $this->fields['3'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['3'] = '';
        $this->fields['4'] = '\\Getui\\Protobuf\\Type\\PBString';
        $this->values['4'] = '';
    }

    public function message()
    {
        return $this->_get_value('1');
    }

    public function set_message($value)
    {
        return $this->_set_value('1', $value);
    }

    public function expire()
    {
        return $this->_get_value('2');
    }

    public function set_expire($value)
    {
        return $this->_set_value('2', $value);
    }

    public function seqId()
    {
        return $this->_get_value('3');
    }

    public function set_seqId($value)
    {
        return $this->_set_value('3', $value);
    }

    public function taskGroupName()
    {
        return $this->_get_value('4');
    }

    public function set_taskGroupName($value)
    {
        return $this->_set_value('4', $value);
    }

}
