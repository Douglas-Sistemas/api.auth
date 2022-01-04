<?php

namespace Feature;

use TestCase;

class UserTest extends TestCase
{

    public function test()
    {
        $this->get('/users')->assertResponseOk();
    }

}
