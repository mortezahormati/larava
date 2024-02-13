<?php

namespace App\Services\Varzesh3;

class Varzesh
{
    protected $uri;
    protected $token;

    public function __construct()
    {
        $this->uri = config('services.varzesh3.uri');
        $this->token = config('services.varzesh3.token');
    }
    public function getUri()
    {
        return $this->uri;
    }

    public function getToken()
    {
        return $this->token;
    }
}
