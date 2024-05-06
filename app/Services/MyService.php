<?php

namespace App\Services;

class MyService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function print_pre($data)
    {
        return '<pre>' . print_r($data, true) . '</pre>';
    }
}
