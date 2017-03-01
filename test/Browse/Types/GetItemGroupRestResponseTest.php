<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Browse\Types;

use DTS\eBaySDK\Browse\Types\GetItemGroupRestResponse;

class GetItemGroupRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetItemGroupRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\GetItemGroupRestResponse', $this->obj);
    }

    public function testExtendsItemGroup()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Browse\Types\ItemGroup', $this->obj);
    }
}