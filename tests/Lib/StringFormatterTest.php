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
/*
    public function testConcatStringSuccess()
    {

    }

    public function testConcatStringError()
    {

    }
*/
}
