<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.7                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2016                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */
namespace Civi\FlexMailer\Event;

/**
 * Class SendBatchEvent
 * @package Civi\FlexMailer\Event
 */
class SendBatchEvent extends BaseEvent {

  /**
   * @var array<\Civi\FlexMailer\FlexMailerTask>
   */
  private $tasks;

  /**
   * @var bool|NULL
   */
  private $isCompleted = NULL;

  public function __construct($context, $tasks) {
    parent::__construct($context);
    $this->tasks = $tasks;
  }

  /**
   * @return array<\Civi\FlexMailer\FlexMailerTask>
   */
  public function getTasks() {
    return $this->tasks;
  }

  /**
   * @return bool|NULL
   */
  public function getCompleted() {
    return $this->isCompleted;
  }

  /**
   * @param bool|NULL $isCompleted
   * @return SendBatchEvent
   */
  public function setCompleted($isCompleted) {
    $this->isCompleted = $isCompleted;
    return $this;
  }

}
