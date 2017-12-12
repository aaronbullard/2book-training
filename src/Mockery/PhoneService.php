<?php

namespace Training\Mockery;

interface PhoneService
{
    public function sendText(array $options) : bool;
}
