<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class TaskListTest extends TestCase
{

    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->CI->load->model('task');
        $this->tasks = new Tasks();
    }

    function testIfIncompleteGreaterThanComplete() {
        $total = 0;
        $undone = 0;
        $expected = 1;
        $result = 1;
        foreach($this->tasks->all() as $task) {
            if ($task->status !=2)
                $undone++;
        }
        if ($undone < $total / 2) {
            $result = 0;
        }
        $this->assertEquals($expected, $result);
    }
}
