<?php


namespace HttpStatusCodes\Tests\Unit;

use HttpStatusCodes\HttpStatusCodes;
use PHPUnit\Framework\TestCase;

class HttpStatusCodesTest extends TestCase
{
    public function testGetMessage()
    {
        $this->assertSame('OK', HttpStatusCodes::getMessage(200));
    }

    public function testHasOnInvalidStatusCode()
    {
        $this->assertFalse(HttpStatusCodes::has(5010));
    }

    public function testHasOnValidStatusCode()
    {
        $httpStatusCodes = HttpStatusCodes::getDescription(200);

        $this->assertTrue(HttpStatusCodes::has(200));
    }

    public function testGetDescription()
    {
        $this->assertSame('The request was fulfilled.', HttpStatusCodes::getDescription(200));
    }

    /**
     * @expectedException \OutOfRangeException
     * @expectedExceptionMessage Status code 2000 not recognised.
     */
    public function testGetDescriptionOnInvalidStatusCode()
    {
        HttpStatusCodes::getDescription(2000);
    }
}
