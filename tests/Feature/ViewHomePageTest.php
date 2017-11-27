<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;


class ViewHomePageTest extends TestCase
{

    public function test_can_see_category()
    {
        $response = $this->get('/category');
    	$response->assertSee('hello');
    }


}
