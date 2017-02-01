<?php
namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{

    public function testPrefixSuccess()
    {
        $stringFormatter = new StringFormatter();
        $resultYesCamelCase = $stringFormatter->prefix('prefix', 'string', true);
        $this->assertEquals('prefixString', $resultYesCamelCase);
        $resultNoCamelCase = $stringFormatter->prefix('prefix', 'string', false);
        $this->assertEquals('prefixstring', $resultNoCamelCase);
    }

    public function testPrefixError()
    {
        $stringFormatter = new StringFormatter();
        $resultYesCamelCase = $stringFormatter->prefix('prefix', 'string', true);
        $this->assertNotEquals('prefixstring', $resultYesCamelCase);
        $resultNoCamelCase = $stringFormatter->prefix('prefix', 'string', false);
        $this->assertNotEquals('prefixString', $resultNoCamelCase);
    }

    public function testSuffixSuccess()
    {
        $stringFormatter = new StringFormatter();
        $resultYesCamelCase = $stringFormatter->suffix('suffix', 'string', true);
        $this->assertEquals('stringSuffix', $resultYesCamelCase);
        $resultNoCamelCase = $stringFormatter->suffix('suffix', 'string', false);
        $this->assertEquals('stringsuffix', $resultNoCamelCase);
    }

    public function testSuffixError()
    {
        $stringFormatter = new StringFormatter();
        $resultYesCamelCase = $stringFormatter->suffix('suffix', 'string', true);
        $this->assertNotEquals('suffixstring', $resultYesCamelCase);
        $resultNoCamelCase = $stringFormatter->suffix('suffix', 'string', false);
        $this->assertNotEquals('suffixString', $resultNoCamelCase);
    }

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
        $this->assertNotEquals('Prefix String', $result);
        $this->assertNotEquals('Prefixstring', $result);
        $this->assertNotEquals('prefixstring', $result);
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
