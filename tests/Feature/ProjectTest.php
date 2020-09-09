<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class ProjectTest extends TestCase
{
    use WithFaker , RefreshDatabase;

    public function test_user_can_create_a_project ()
    {
        $this->withoutExceptionHandling();
        $attr = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];
        $this->post('/project',$attr);

        $this->assertDatabaseHas('projects',$attr);
//
        $this->get('/project')->assertSee($attr['title']);
//
//
    }
    public function test_title_require()
    {

        $this->post('/project',[])->assertSessionHasErrors('title');

    }

}
