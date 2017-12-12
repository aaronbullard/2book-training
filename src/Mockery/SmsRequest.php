<?php

namespace Training\Mockery;

class SmsRequest
{
    protected $client_id;

    protected $message;

    public function __construct($client_id, $message)
    {
        $this->client_id = $client_id;
        $this->message = $message;
    }

    public function getClientId()
    {
        return $this->client_id;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
