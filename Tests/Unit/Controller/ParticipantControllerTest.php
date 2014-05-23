<?php
namespace VMeC\VmecEvents\Tests\Unit\Controller;
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
 * Test case for class VMeC\VmecEvents\Controller\ParticipantController.
 *
 * @author Christoph Fischer <christoph.fischer@volksmission.de>
 */
class ParticipantControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VMeC\VmecEvents\Controller\ParticipantController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('VMeC\\VmecEvents\\Controller\\ParticipantController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllParticipantsFromRepositoryAndAssignsThemToView() {

		$allParticipants = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$participantRepository = $this->getMock('VMeC\\VmecEvents\\Domain\\Repository\\ParticipantRepository', array('findAll'), array(), '', FALSE);
		$participantRepository->expects($this->once())->method('findAll')->will($this->returnValue($allParticipants));
		$this->inject($this->subject, 'participantRepository', $participantRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('participants', $allParticipants);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenParticipantToView() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('participant', $participant);

		$this->subject->showAction($participant);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenParticipantToView() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newParticipant', $participant);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($participant);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenParticipantToParticipantRepository() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();

		$participantRepository = $this->getMock('VMeC\\VmecEvents\\Domain\\Repository\\ParticipantRepository', array('add'), array(), '', FALSE);
		$participantRepository->expects($this->once())->method('add')->with($participant);
		$this->inject($this->subject, 'participantRepository', $participantRepository);

		$this->subject->createAction($participant);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenParticipantToView() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('participant', $participant);

		$this->subject->editAction($participant);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenParticipantInParticipantRepository() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();

		$participantRepository = $this->getMock('VMeC\\VmecEvents\\Domain\\Repository\\ParticipantRepository', array('update'), array(), '', FALSE);
		$participantRepository->expects($this->once())->method('update')->with($participant);
		$this->inject($this->subject, 'participantRepository', $participantRepository);

		$this->subject->updateAction($participant);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenParticipantFromParticipantRepository() {
		$participant = new \VMeC\VmecEvents\Domain\Model\Participant();

		$participantRepository = $this->getMock('VMeC\\VmecEvents\\Domain\\Repository\\ParticipantRepository', array('remove'), array(), '', FALSE);
		$participantRepository->expects($this->once())->method('remove')->with($participant);
		$this->inject($this->subject, 'participantRepository', $participantRepository);

		$this->subject->deleteAction($participant);
	}
}
