<?php

namespace Opendi\Skeletor\Tests;

use Opendi\Skeletor\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testAddition()
    {
        $x = 2;
        $y = 3;

        $expected = $x + $y;

        $app = new Application();
        $actual = $app->add($x, $y);

        $this->assertSame($expected, $actual);
    }
}
