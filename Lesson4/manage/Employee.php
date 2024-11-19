<?php
abstract class Employee
{


    protected $name;
    protected $salary;
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }

    abstract public function calculateBonus();
}
