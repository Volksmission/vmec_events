<?php
namespace VMeC\VmecEvents\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Participant
 */
class Participant extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * email
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $email = '';

	/**
	 * phone
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $phone = '';

	/**
	 * address
	 *
	 * @var string
	 */
	protected $address = '';

	/**
	 * birthDate
	 *
	 * @var string
	 */
	protected $birthDate = '';

	/**
	 * numberOfPersions
	 *
	 * @var string
	 */
	protected $numberOfPersions = '';

	/**
	 * message
	 *
	 * @var string
	 */
	protected $message = '';

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the phone
	 *
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the address
	 *
	 * @return string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the birthDate
	 *
	 * @return string $birthDate
	 */
	public function getBirthDate() {
		return $this->birthDate;
	}

	/**
	 * Sets the birthDate
	 *
	 * @param string $birthDate
	 * @return void
	 */
	public function setBirthDate($birthDate) {
		$this->birthDate = $birthDate;
	}

	/**
	 * Returns the numberOfPersions
	 *
	 * @return string $numberOfPersions
	 */
	public function getNumberOfPersions() {
		return $this->numberOfPersions;
	}

	/**
	 * Sets the numberOfPersions
	 *
	 * @param string $numberOfPersions
	 * @return void
	 */
	public function setNumberOfPersions($numberOfPersions) {
		$this->numberOfPersions = $numberOfPersions;
	}

	/**
	 * Returns the message
	 *
	 * @return string $message
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Sets the message
	 *
	 * @param string $message
	 * @return void
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

}