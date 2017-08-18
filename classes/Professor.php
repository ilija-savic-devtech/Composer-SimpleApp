<?php

namespace classes;

class Professor extends AbstractHuman implements ProfessorInterface, HumanInterface
{

	private $_numberOfScientificWork;
	private $_subject;

	/**
	 * Getter for number of scientific work
	 * @return mixed
	 */
	public function getNumberOfScientificWork()
	{
		return $this->_numberOfScientificWork;
	}

	/**
	 * Setter for scientific work
	 * @param mixed $numberOfScientificWork
	 * @return Professor
	 */
	public function setNumberOfScientificWork($numberOfScientificWork)
	{
		$this->_numberOfScientificWork = $numberOfScientificWork;

		return $this;
	}

	/**
	 * Getter for subject
	 * @return mixed
	 */
	public function getSubject()
	{
		return $this->_subject;
	}

	/**
	 * Setter for subject
	 * @param mixed $subject
	 * @return Professor
	 */
	public function setSubject($subject)
	{
		$this->_subject = $subject;

		return $this;
	}

	/**
	 * @return string
	 */
	public function role()
	{
		return "I am professor";
	}

	/**
	 * Printing out Professor action
	 */
	public function questioning()
	{
		return "Professor questioning!!!";
	}

}

