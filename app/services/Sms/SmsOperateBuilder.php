<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/5
 * Time: 22:06
 */

class SmsOperateBuilder {
    private $_SmsOperate;
    private $_datas;

    function __construct($_datas){
        $this->_SmsOperate = new SmsOperate();
        $this->_datas = $_datas;
    }

    function build(){
        $this->_SmsOperate->setCapType($this->_datas['capType']);
        $this->_SmsOperate->setCacheTime($this->_datas['capType']);
        $this->_SmsOperate->getCapLength($this->_datas['capLength']);
    }

    public function getSmsOperate(){
        return $this->_SmsOperate;
    }

} 