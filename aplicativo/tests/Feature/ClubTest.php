<?php

namespace Tests\Feature;

use App\Club;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClubTest extends TestCase
{
    use DatabaseMigrations;

    public function testResourceIndex()
    {
        $response = $this->get('/clubs');
        $response->assertStatus(200);
    }

    public function testResourceCreate()
    {
        $response = $this->get('/clubs/create');
        $response->assertStatus(200);
    }

    public function testResourceShow()
    {
        $data = factory(\App\Club::class)->create();
        $response = $this->get('/clubs/' . $data->id . '/show');
        $response->assertStatus(404);
    }

    public function testResourceEdit()
    {
        $data = factory(\App\Club::class)->create();
        $response = $this->get('/clubs/' . $data->id . '/edit');
        $response->assertStatus(200);
    }

    public function testApiIndex()
    {
        factory(Club::class, 10)->create();
        $data = Club::orderBy('name')->get();
        $response = $this->json('GET', '/api/clubs');
        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiShow()
    {
        $data = factory(\App\Club::class)->create();
        $response = $this->json('GET', '/api/clubs/' . $data->id);
        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiStore()
    {
        $data = factory(\App\Club::class)->make();
        $response = $this->json('POST', '/api/clubs', $data->toArray());
        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiUpdate()
    {
        $data = factory(\App\Club::class)->create();
        $dataUpdate = ['title' => 'Título atualizado'];
        $response = $this->json('PUT', '/api/clubs/' . $data->id, $dataUpdate);
        $data = Club::findOrFail($data->id);
        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiDelete()
    {
        $data = factory(\App\Club::class)->create();
        $response = $this->json('DELETE', '/api/clubs/' . $data->id);
        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }
}
