<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_deve_redirecionar_para_login()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }
}
