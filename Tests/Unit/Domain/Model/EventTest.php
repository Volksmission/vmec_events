<?php

namespace VMeC\VmecEvents\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Christoph Fischer <christoph.fischer@volksmission.de>, Volksmission entschiedener Christen e.V.
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \VMeC\VmecEvents\Domain\Model\Event.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christoph Fischer <christoph.fischer@volksmission.de>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \VMeC\VmecEvents\Domain\Model\Event
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \VMeC\VmecEvents\Domain\Model\Event();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getStartReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getStart()
		);
	}

	/**
	 * @test
	 */
	public function setStartForDateTimeSetsStart() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setStart($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'start',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEnd()
		);
	}

	/**
	 * @test
	 */
	public function setEndForDateTimeSetsEnd() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEnd($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'end',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAllDayReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getAllDay()
		);
	}

	/**
	 * @test
	 */
	public function setAllDayForBooleanSetsAllDay() {
		$this->subject->setAllDay(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'allDay',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTeaser()
		);
	}

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser() {
		$this->subject->setTeaser('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'teaser',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() {
		$this->subject->setLocation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'location',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationAddressReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLocationAddress()
		);
	}

	/**
	 * @test
	 */
	public function setLocationAddressForStringSetsLocationAddress() {
		$this->subject->setLocationAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'locationAddress',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRegistrationEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRegistrationEmail()
		);
	}

	/**
	 * @test
	 */
	public function setRegistrationEmailForStringSetsRegistrationEmail() {
		$this->subject->setRegistrationEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'registrationEmail',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getParticipantsReturnsInitialValueForParticipant() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getParticipants()
		);
	}

	/**
	 * @test
	 */
	public function setParticipantsForObjectStorageContainingParticipantSetsParticipants() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();
		$objectStorageHoldingExactlyOneParticipants = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneParticipants->attach($participant);
		$this->subject->setParticipants($objectStorageHoldingExactlyOneParticipants);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneParticipants,
			'participants',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addParticipantToObjectStorageHoldingParticipants() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();
		$participantsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$participantsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($participant));
		$this->inject($this->subject, 'participants', $participantsObjectStorageMock);

		$this->subject->addParticipant($participant);
	}

	/**
	 * @test
	 */
	public function removeParticipantFromObjectStorageHoldingParticipants() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();
		$participantsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$participantsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($participant));
		$this->inject($this->subject, 'participants', $participantsObjectStorageMock);

		$this->subject->removeParticipant($participant);

	}
}
