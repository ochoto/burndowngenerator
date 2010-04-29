<?php
/* 
 * Yet another burndown online generator, http://www.burndowngenerator.com
 * Copyright (C) 2010 Francisco José Naranjo <fran.naranjo@gmail.com>
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class SimplePageAction {
	private $_options = null;

	public function __construct($options) {
		$this->_options = $options;
	}

	public function execute() {
		include_once(dirname(__FILE__) . '/../XTemplate.class.php');
		$xtpl = new XTemplate($this->_options['name'] . '.xtpl', dirname(__FILE__) . '/../../../xtpl');

		if($GLOBALS['config']['ads'] == true) {
			$xtpl->parse('main.ads');
		}

		$xtpl->parse('main');
		$xtpl->out('main');
	}
}
