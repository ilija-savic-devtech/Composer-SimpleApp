<?php

namespace classes;

abstract class AbstractHuman
{

    protected $name;
    protected $surname;

    /**
     * Getter for name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for surname
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Setter for surname
     * @param mixed $surname
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }


}
