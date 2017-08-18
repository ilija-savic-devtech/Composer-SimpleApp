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
	 * @return string
	 */
	public function role()
	{
		return "I am student";
	}

	/**
	 * @return string
	 */
	public function studying()
	{
		return "Student studying!!!";
	}

}

