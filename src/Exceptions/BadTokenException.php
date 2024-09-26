<?php

use Illuminate\Support\Facades\Request;
use \Symfony\Component\HttpFoundation\Response;
class BadTokenException extends Exception
{
    private var int $_tokenLen;

    public function render(Request $request) : Response|null {
        if(empty(Request::input('token'))) {
            return \response("Token is empty");
        } elseif(strlen(Request::input('token')) != $this->_tokenLen) {
            return \response("Unrecognized token length");
        }
        return null;
    }
}
