<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Fruitbowl extends Memory_Model {
    // over-ride base collection adding, with a limit
    function add($record) {
        if ($this->size() >= 6)
            throw new Exception('The fruit bowl is full');
    }
}