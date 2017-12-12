<?php

namespace Training\Mockery;

interface ClientRepository
{
    public function findById($client_id) : Client;
}
