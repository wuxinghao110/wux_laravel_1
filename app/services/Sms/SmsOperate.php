<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/5
 * Time: 22:06
 */

class SmsOperate {
    private $_cacheTime; //缓存时间
    private $_capType; //1:数字  2：数字字母  3：字母
    private $_capLength; //验证码长度
    private $_mobile;
    private $_tId;
    private $_params = array();

    /**
     * @return mixed
     */
    public function getCacheTime()
    {
        return $this->_cacheTime;
    }

    /**
     * @param mixed $cacheTime
     */
    public function setCacheTime($cacheTime)
    {
        $this->_cacheTime = $cacheTime;
    }

    /**
     * @return mixed
     */
    public function getCapLength()
    {
        return $this->_capLength;
    }

    /**
     * @param mixed $capLength
     */
    public function setCapLength($capLength)
    {
        $this->_capLength = $capLength;
    }

    /**
     * @return mixed
     */
    public function getCapType()
    {
        return $this->_capType;
    }

    /**
     * @param mixed $capType
     */
    public function setCapType($capType)
    {
        $this->_capType = $capType;
    }



    /**
     * 生成验证码
     * 存储到cookie中
     * 存储时间为600秒
     */
    private  function  creatCap(){
        if(!$this->_capType){
            throw new Exception(_capType.'is empty');
        }
        if(!$this->_capLength){
            throw new Exception(_capLength.'is empty');
        }
        if(!$this->_cacheTime){
            throw new Exception(_cacheTime.'is empty');
        }
    }

    /**
     * 调用sms发送接口
     */
    public function sendMessage(){

    }
}