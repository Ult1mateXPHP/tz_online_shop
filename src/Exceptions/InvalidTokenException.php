<?php

namespace OnlineShop\Exceptions;

use Symfony\Component\HttpFoundation\Response;

class InvalidTokenException
{
    public function render(): Response
    {
        return response("Token not found");
    }
}
