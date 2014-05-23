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
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * start
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $start = NULL;

	/**
	 * end
	 *
	 * @var \DateTime
	 * @validate NotEmpty
	 */
	protected $end = NULL;

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * teaser
	 *
	 * @var string
	 */
	protected $teaser = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * location
	 *
	 * @var string
	 */
	protected $location = '';

	/**
	 * locationAddress
	 *
	 * @var string
	 */
	protected $locationAddress = '';

	/**
	 * registrationEmail
	 *
	 * @var string
	 */
	protected $registrationEmail = '';

	/**
	 * participants
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VMeC\VmecEvents\Domain\Model\Participant>
	 * @cascade remove
	 */
	protected $participants = NULL;

	/**
	 * allDay
	 *
	 * @var boolean
	 */
	protected $allDay = FALSE;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the teaser
	 *
	 * @return string $teaser
	 */
	public function getTeaser() {
		return $this->teaser;
	}

	/**
	 * Sets the teaser
	 *
	 * @param string $teaser
	 * @return void
	 */
	public function setTeaser($teaser) {
		$this->teaser = $teaser;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the location
	 *
	 * @return string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the locationAddress
	 *
	 * @return string $locationAddress
	 */
	public function getLocationAddress() {
		return $this->locationAddress;
	}

	/**
	 * Sets the locationAddress
	 *
	 * @param string $locationAddress
	 * @return void
	 */
	public function setLocationAddress($locationAddress) {
		$this->locationAddress = $locationAddress;
	}

	/**
	 * Returns the registrationEmail
	 *
	 * @return string $registrationEmail
	 */
	public function getRegistrationEmail() {
		return $this->registrationEmail;
	}

	/**
	 * Sets the registrationEmail
	 *
	 * @param string $registrationEmail
	 * @return void
	 */
	public function setRegistrationEmail($registrationEmail) {
		$this->registrationEmail = $registrationEmail;
	}

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->participants = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a Participant
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $participant
	 * @return void
	 */
	public function addParticipant(\VMeC\VmecEvents\Domain\Model\Participant $participant) {
		$this->participants->attach($participant);
	}

	/**
	 * Removes a Participant
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $participantToRemove The Participant to be removed
	 * @return void
	 */
	public function removeParticipant(\VMeC\VmecEvents\Domain\Model\Participant $participantToRemove) {
		$this->participants->detach($participantToRemove);
	}

	/**
	 * Returns the participants
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VMeC\VmecEvents\Domain\Model\Participant> $participants
	 */
	public function getParticipants() {
		return $this->participants;
	}

	/**
	 * Sets the participants
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VMeC\VmecEvents\Domain\Model\Participant> $participants
	 * @return void
	 */
	public function setParticipants(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $participants) {
		$this->participants = $participants;
	}

	/**
	 * Returns the start
	 *
	 * @return \DateTime start
	 */
	public function getStart() {
		return $this->start;
	}

	/**
	 * Sets the start
	 *
	 * @param \DateTime $start
	 * @return \DateTime start
	 */
	public function setStart(\DateTime $start) {
		$this->start = $start;
	}

	/**
	 * Returns the end
	 *
	 * @return \DateTime end
	 */
	public function getEnd() {
		return $this->end;
	}

	/**
	 * Sets the end
	 *
	 * @param \DateTime $end
	 * @return \DateTime end
	 */
	public function setEnd(\DateTime $end) {
		$this->end = $end;
	}

	/**
	 * Returns the allDay
	 *
	 * @return boolean $allDay
	 */
	public function getAllDay() {
		return $this->allDay;
	}

	/**
	 * Sets the allDay
	 *
	 * @param boolean $allDay
	 * @return void
	 */
	public function setAllDay($allDay) {
		$this->allDay = $allDay;
	}

	/**
	 * Returns the boolean state of allDay
	 *
	 * @return boolean
	 */
	public function isAllDay() {
		return $this->allDay;
	}

}