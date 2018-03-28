<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class FruitTest extends TestCase
{

    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('fruit');
        $this->item = new Fruit();
        $this->item->id = 1;
        $this->item->name = 'Banana';
        $this->item->color = 'yellow';
        $this->item->weight = 100;
    }

    function testSetup() {
        $this->assertEquals(1, $this->item->id);
        $this->assertEquals('Banana', $this->item->name);
        $this->assertEquals('yellow', $this->item->color);
        $this->assertEquals(100, $this->item->weight);
    }

    function testValidId() {
        $expected = 123;
        $this->item->id = $expected;
        $this->assertEquals($expected, $this->item->id);
    }

    /**
     * This is an alternate way to assert that an exception should occur
     * @expectedException InvalidArgumentException
     */
    function testInvalidId() {
        //  $this->expectException('InvalidArgumentException');
        $this->item->id = null;
    }

    function testNamePresent() {
        $expected = "George";
        $this->item->name = $expected;
        $this->assertEquals($expected, $this->item->name);
    }

    function testNameAbsent() {
        $badvalue = "";
        $this->expectException(Exception::class);
        $this->item->name = $badvalue; // this should croak
    }

    function testNameTooLong() {
        $badvalue = "George Paul John Ringo Henry Tom Dick";
        $this->expectException('Exception');
        $this->item->name = $badvalue; // this should croak
    }
}
