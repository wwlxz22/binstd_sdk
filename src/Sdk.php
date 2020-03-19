<?php


use Binstd\Sdk\Daily\Express;
use Binstd\Sdk\Daily\Sms;

class Sdk
{
    private $key;
    private $string;
    public $sms;
    public $express;

    public function __construct($key, $secret)
    {
        $this->key = $key;
        $this->string = $secret;
        $this->sms = new Sms($key, $secret);
        $this->express=new Express($key,$secret);
    }

}