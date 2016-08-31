<?php
    /**
     * Created by PhpStorm.
     * User: PAVLO
     * Date: 23.05.2016
     * Time: 11:57
     */

    namespace pashkinz92\epochtasms;

    use Yii;


    class EpochtaClass
    {
        var $sms_key_private = false;
        var $sms_key_public = false;
        var $testMode = false;
        var $name_sender = false;
        var $URL_GAREWAY = 'http://atompark.com/api/sms/';

        public function init()
        {
            if( !$this->sms_key_private || $this->sms_key_public || $this->name_sender )
            {
                throw new InvalidConfigException('$sms_key_private AND $sms_key_public AND $name_sender must be fill' );
            }
        }

        function sendSMS($text, $phone, $sender = false)
        {
            if( !$sender )
            {
                $sender = $this->name_sender;
            }
            $datetime = date('Y-m-d H:i:s', time());
            $sms_lifetime =  0;

            $Gateway=new APISMS($this->sms_key_private, $this->sms_key_public, $this->URL_GAREWAY, $this->testMode);
            $Stat = new Stat ($Gateway);

            return $Stat->sendSMS($sender, $text, $phone, $datetime, $sms_lifetime);
        }
    }