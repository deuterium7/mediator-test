<?php

namespace AlexanderZabornyi\MediatorTest\Tests;

use AlexanderZabornyi\MediatorTest\Chat;
use AlexanderZabornyi\MediatorTest\User;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testMediator()
    {
        $mediator = new Chat();

        $alex = new User('Alex', $mediator);
        $tom = new User('Tom', $mediator);

        $this->assertEquals(
            '[' . $alex->getName() . ']: Hi, Tom!',
            $alex->send('Hi, Tom!')
        );
        $this->assertEquals(
            '[' . $tom->getName() . ']: Hello',
            $tom->send('Hello')
        );
    }
}