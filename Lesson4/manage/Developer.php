<?php
class Developer extends Employee implements Workable
{
    public function calculateBonus()
    {
        return $this->salary * 0.1;
    }
    public function work()
    {
        return "Lập trình";
    }
}