<?php

use DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType;

class MaximumUnpaidItemStrikesInfoDetailsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MaximumUnpaidItemStrikesInfoDetailsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\MaximumUnpaidItemStrikesInfoDetailsType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
