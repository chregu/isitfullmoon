<?php

namespace IsItFullMoon;

/**
 * Override time() in current namespace for testing
 */
function time()
{
    return FullMoonTest::$time;
}

class FullMoonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var int $time Timestamp that will be returned by time()
     */
    public static $time = 0;

    function testIsItFullMoon()
    {
        self::$time = strtotime('2015-10-27T13:05:59+01:00');

        include __DIR__ . '/../inc/fullmoon.php';

        $this->assertEquals('Yes', $data['status']);
    }

    function testNotFullMoon()
    {
        self::$time = strtotime('2015-11-11T12:00:00+01:00');

        include __DIR__ . '/../inc/fullmoon.php';

        $this->assertEquals('No', $data['status']);
    }
}
