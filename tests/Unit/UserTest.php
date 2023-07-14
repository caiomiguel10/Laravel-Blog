<?php

namespace Tests\Unit;

use App\Models\User;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_dnv_teste(): void
    {   
        $user = new User;
        
        $expected = [
            'name',
           'email',
           'password'
        ];

        $arrayCompared = array_diff($expected,$user->getFillable());
        // $this->assertTrue(true);
       
        $this->assertEquals(0,count($arrayCompared));
    }
}
