<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class BoardTest extends TestCase
{
    /** @test */
    public function 掲示板新規作成ができる()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $data = [
          'name' => '田中太郎',
          'title' => 'タイトル',
          'body' => '本文'
        ];

        $response = $this->post(route('boards.create'), $data);
        $response->assertRedirect(route('boards.index'));
    }
}
