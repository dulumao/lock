<?php

namespace RemiSan\Lock\TokenGenerator;

use RemiSan\Lock\TokenGenerator;

class FixedTokenGenerator implements TokenGenerator
{
    /** @var  string */
    private $token;

    /**
     * FixedTokenGenerator constructor.
     *
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @inheritDoc
     */
    public function generateToken()
    {
        return $this->token;
    }
}
