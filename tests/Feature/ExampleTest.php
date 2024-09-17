<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_post_create_worker(): void
    {
        $this->post('/workers' ,[
            'name' => 'TEST',
            'surname' => 'TESTov',
            'email' => 'fsfd@fsd.ru',
            'age' => 36,
            'description' => 'Some',
            'is_married' => true,
            'position_id' => 1,
        ]);

        $this->assertDatabaseHas('workers', [
            'name' => 'TEST',
            'surname' => 'TESTov',
            'email' => 'fsfd@fsd.ru',
            'age' => 36,
            'description' => 'Some',
            'is_married' => true,
            'position_id' => 1,
        ]);
    }
}
