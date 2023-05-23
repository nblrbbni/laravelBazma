<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $shortName = config("coba.XI.shortName");
        $fullName = config("coba.XI.fullName");

        self::assertEquals($shortName, "Nabil");
        self::assertEquals($fullName, "Muhammad Nabil Rabbani");
    }
}
