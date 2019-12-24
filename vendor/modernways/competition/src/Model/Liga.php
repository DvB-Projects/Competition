<?php
namespace ModernWays\Competition;

class Liga
{
    private $name;
    private $year;
    private $isInPlanning;
    
    public function setName($value) 
    {
        if (empty ($value))
        {
            return false;
        } else {
            $this->name = $value;
            return true;
        }
    }
    
    public function getName() 
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getisInPlanning()
    {
        return $this->isInPlanning;
    }

    /**
     * @param mixed $isInPlanning
     */
    public function setIsInPlanning($isInPlanning)
    {
        $this->isInPlanning = $isInPlanning;
    }
    
}