<?php

namespace Training\Mockery;

class Client
{
    protected $id;

    protected $firstname;

    protected $lastname;

    protected $smsPhone;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function setSmsPhone($number)
    {
        $this->smsPhone = $number;
    }

    public function getSmsPhone()
    {
        return $this->smsPhone;
    }
}
