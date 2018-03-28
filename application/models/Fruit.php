<?php

class Fruit extends Entity {
    protected $id;
    protected $name;
    protected $color;
    protected $weight;
    protected $picker;

    // insist that an ID be present
    public function setId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An Id must have a value');
        $this->id = $value;
        return $this;
    }

    // insist that a Name be present and no longer than 30 characters
    public function setName($value) {
        if (empty($value))
            throw new Exception('A Name cannot be empty');
        if (strlen($value) > 30)
            throw new Exception('A Name cannot be longer than 30 characters');
        $this->name = $value;
        return $this;
    }

    // insist that a Color be one of yellow, red or green
    public function setColor($value) {
        $allowed = ['yellow', 'red', 'green'];
        if (!in_array($value, $allowed))
            throw new Exception('A color must be one we like');
        $this->color = $value;
        return $this;
    }

    // insist that a Weight be a positive number, and less than 1000 (grams)
    public function setWeight($value) {
        if (!is_numeric($value))
            throw new Exception('Weight must be numeric');
        if ($value > 1000)
            throw new Exception('A fruit cannot weigh more than 1kg');
        $this->weight = $value;
        return $this;
    }

}
