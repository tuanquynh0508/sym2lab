<?php

namespace Lab\ConfigtestBundle\Service;

class TestConfigService
{
    protected $url;
    protected $user;
    protected $password;
    protected $allowIp;

    public function __construct($url, $user, $password, $allowIp)
    {
        $this->url = $url;
        $this->user = $user;
        $this->password = $password;
        $this->allowIp = $allowIp;
    }

    public function __toString()
    {
        return $this->url." - ".$this->user." - ".$this->password." - ".implode(';',$this->allowIp);
    }
}
