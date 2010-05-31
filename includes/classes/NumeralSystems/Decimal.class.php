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
class Decimal implements INumeralSystem {
	private $_value = null;

	public function __construct($value) {
		$this->_value = $this->_sanitize($value);
	}
	
	public function decimal() {
		return $this->_value;
	}
	
	public function hexadecimal() {
		if(!is_null($this->_value)) {
			return dechex($this->_value);
		}
		
		return $this->_value;
	}
	
	private function _sanitize($value) {
		if(is_numeric($value)) {
			return $value;
		}
		
		return null;
	}
}