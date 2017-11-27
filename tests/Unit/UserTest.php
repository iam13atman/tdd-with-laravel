<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
	public function test_that_emails_exist()
	{
		$data = User::all();
		$this->assertObjectHasAttribute('email',$data);
	}
}
