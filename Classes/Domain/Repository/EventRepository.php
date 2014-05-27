<?php
namespace VMeC\VmecEvents\Domain\Repository;

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
 * The repository for Events
 */
class EventRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {
	
	
	/**
	 * Find a specified number of upcoming events
	 * 
	 * @param int $limit
	 * @return \VMeC\VmecEvents\Domain\Model\Event
	 */
	public function findUpcoming (int $limit = NULL) {
		//die ('findUpcoming: '.$limit);	
		$this->setDefaultOrderings(array('start' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
		$q = $this->createQuery();
		if ($limit) $q->setLimit((int)$limit);
		$constraints = array(
				$q->greaterThanOrEqual('start', strftime('%Y-%m-%d %H:%M:%S')),
		);
		$events = $q->matching($q->logicalAnd($constraints))->execute();
		return $events;
		
	}

	
}