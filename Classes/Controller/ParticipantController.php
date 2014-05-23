<?php
namespace VMeC\VmecEvents\Controller;

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
 * ParticipantController
 */
class ParticipantController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * participantRepository
	 *
	 * @var \VMeC\VmecEvents\Domain\Repository\ParticipantRepository
	 * @inject
	 */
	protected $participantRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$participants = $this->participantRepository->findAll();
		$this->view->assign('participants', $participants);
	}

	/**
	 * action show
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $participant
	 * @return void
	 */
	public function showAction(\VMeC\VmecEvents\Domain\Model\Participant $participant) {
		$this->view->assign('participant', $participant);
	}

	/**
	 * action new
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $newParticipant
	 * @ignorevalidation $newParticipant
	 * @return void
	 */
	public function newAction(\VMeC\VmecEvents\Domain\Model\Participant $newParticipant = NULL) {
		$this->view->assign('newParticipant', $newParticipant);
	}

	/**
	 * action create
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $newParticipant
	 * @return void
	 */
	public function createAction(\VMeC\VmecEvents\Domain\Model\Participant $newParticipant) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->participantRepository->add($newParticipant);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $participant
	 * @ignorevalidation $participant
	 * @return void
	 */
	public function editAction(\VMeC\VmecEvents\Domain\Model\Participant $participant) {
		$this->view->assign('participant', $participant);
	}

	/**
	 * action update
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $participant
	 * @return void
	 */
	public function updateAction(\VMeC\VmecEvents\Domain\Model\Participant $participant) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->participantRepository->update($participant);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \VMeC\VmecEvents\Domain\Model\Participant $participant
	 * @return void
	 */
	public function deleteAction(\VMeC\VmecEvents\Domain\Model\Participant $participant) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->participantRepository->remove($participant);
		$this->redirect('list');
	}

	/**
	 * action
	 *
	 * @return void
	 */
	public function Action() {
		
	}

}