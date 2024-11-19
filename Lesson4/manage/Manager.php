<?php
class Manager extends Employee implements Workable
{
    public function calculateBonus()
    {
        return $this->salary * 0.2;

    }
    public function work()
    {
        return "Quản lý dự án";
    }
}