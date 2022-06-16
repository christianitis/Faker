<?php

namespace Faker\Test\Provider;

use Faker\Provider\en_US\Thing;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
class ThingTest extends TestCase
{
    public function testThingName()
    {
        $thing = $this->faker->thing();
        self::assertTrue(count(explode(' ', $thing)) >= 1);
    }

    protected function getProviders(): iterable
    {
        yield new Thing($this->faker);
    }
}
