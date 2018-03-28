<?php

class Task extends Entity {
    protected $task;
    protected $priority;
    protected $size;
    protected $group;

    // insist that a task be present and no longer than 64 characters
    public function setTask($value) {
        if (empty($value))
            throw new InvalidArgumentException('A Task cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A task cannot be longer than 64 characters');
        $this->task = $value;
        return $this;
    }

    // insist that a Priority be a positive number, and less than 4
    public function setPriority($value) {
        if (!is_numeric($value))
            throw new Exception('Priority must be numeric');
        if ($value > 4)
            throw new Exception('Priority must be less than 4');
        if ($value < 0)
            throw new Exception('Priority must be positive');
        $this->priority = $value;
        return $this;
    }

    // insist that a Size be a positive number, and less than 4
    public function setSize($value) {
        if (!is_numeric($value))
            throw new Exception('Size must be numeric');
        if ($value > 4)
            throw new Exception('Size must be less than 4');
        if ($value < 0)
            throw new Exception('Size must be positive');
        $this->size = $value;
        return $this;
    }

    // insist that a Group be a positive number, and less than 5
    public function setGroup($value) {
        if (!is_numeric($value))
            throw new Exception('Group must be numeric');
        if ($value > 5)
            throw new Exception('Group must be less than 5');
        if ($value < 0)
            throw new Exception('Group must be positive');
        $this->group = $value;
        return $this;
    }


}
