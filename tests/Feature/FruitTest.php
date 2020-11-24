<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FruitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $newKiwi= ["name"=>"kiwi", "size"=>"medium", "main_color"=>"yellow"];
        $id=1;
        $response= $this->call('PATCH', '/api/fruits/{id}', [$newKiwi, $id]);

        $response->assertStatus(200);
    }
}
