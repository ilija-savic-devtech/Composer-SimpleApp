<?php
namespace classes;

interface HumanInterface{
    /**
     * Displaying a role
     * @return mixed
     */
    public function role();

    /**
     * Displaying name and surname
     * @return mixed
     */
    public function printNameAndSurname();
}
