<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Definition of log events
 *
 * NOTE: this is an example how to insert log event during installation/update.
 * It is not really essential to know about it, but these logs were created as example
 * in the previous 1.9 tincanlaunch.
 *
 * @package    mod
 * @subpackage tincanlaunch
 * @copyright  2013 Andrew Downes mrdownes@hotmail.com
 * @license    http://www.apache.org/licenses/ Apache License v2.0
 */

defined('MOODLE_INTERNAL') || die();

global $DB;

$logs = array(
    array('module'=>'tincanlaunch', 'action'=>'add', 'mtable'=>'tincanlaunch', 'field'=>'name'),
    array('module'=>'tincanlaunch', 'action'=>'update', 'mtable'=>'tincanlaunch', 'field'=>'name'),
    array('module'=>'tincanlaunch', 'action'=>'view', 'mtable'=>'tincanlaunch', 'field'=>'name'),
    array('module'=>'tincanlaunch', 'action'=>'view all', 'mtable'=>'tincanlaunch', 'field'=>'name')
);