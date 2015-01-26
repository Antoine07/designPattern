<?php
namespace Services;

class Message {

    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

}