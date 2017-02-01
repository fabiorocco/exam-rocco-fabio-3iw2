<?php
namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{
/*
    public function testPrefixSuccess()
    {

    }

    public function testPrefixError()
    {

    }

    public function testSuffixSuccess()
    {

    }

    public function testSuffixError()
    {

    }
*/
    public function testToCamelCaseSuccess()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->toCamelCase('prefix', 'string');

        $this->assertEquals('prefixString', $result);
    }

    public function testToCamelCaseError()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->toCamelCase('Prefix', 'string');

        $this->assertNotEquals('PrefixString', $result);
    }

    public function testConcatStringSuccess()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->concatString('first', 'second');

        $this->assertEquals('firstsecond', $result);
    }

    public function testConcatStringError()
    {
        $stringFormatter = new StringFormatter();
        $result = $stringFormatter->concatString('first', 'second');

        $this->assertNotEquals('first second', $result);
        $this->assertNotEquals('second first', $result);
        $this->assertNotEquals('secondfirst', $result);
    }

}
