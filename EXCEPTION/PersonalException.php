<?php

class PersonalException extends Exception {

    public function __construct(string $message, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}