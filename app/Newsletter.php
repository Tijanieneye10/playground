<?php

namespace App;

class Newsletter
{
    public function __construct(public Mailchimp $api)
    {

    }
}
