<?php

namespace classes;

class Student extends AbstractHuman implements StudentInterface, HumanInterface
{

    private $_indexNo;
    private $_average;

    /**
     * Getter for index number
     * @return mixed
     */
    public function getIndexNo()
    {
        return $this->_indexNo;
    }

    /**
     * Setter for index number
     * @param mixed $indexNo
     * @return $this
     */
    public function setIndexNo($indexNo)
    {
        $this->_indexNo = $indexNo;
        return $this;
    }

    /**
     * Getter for average
     * @return mixed
     */
    public function getAverage()
    {
        return $this->_average;
    }

    /**
     * Setter for average
     * @param mixed $average
     * @return $this
     */
    public function setAverage($average)
    {
        $this->_average = $average;
        return $this;
    }

    /**
     * Printing out student action
     */
    public function studying()
    {
        echo "Student is studying!!!";
    }

    /**
     * Printing out role of Student class
     */
    public function role()
    {
        echo "<h1><center>I am STUDENT!!!</center></h1><br>";
    }

    /**
     * Printing out name and surname parameters of Student class
     */
    public function printNameAndSurname(){
        echo "Name: " . $this->getName() . "<br>Surname: " . $this->getSurname() . "<br>";
    }

    /**
     * Printing out index number and average of Student class
     */
    public function indexAndAverage(){
        echo "Index number: " . $this->getIndexNo() . "<br> Average: " . $this->getAverage() . "<br>";
    }

}

