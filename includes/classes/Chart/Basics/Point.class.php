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
class Point {
	private $_x = null;
	private $_y = null;

	public function __construct($x, $y) {
		if(is_numeric($x)) {
			$this->_x = $x;
		}
		if(is_numeric($y)) {
			$this->_y = $y;
		}
	}

	public function x() {
		return $this->_x;
	}

	public function y() {
		return $this->_y;
	}
	
	public function isValid() {
		return (!is_null($this->_x) && !is_null($this->_y));
	}
	
	public function isEqual(Point $point) {
		return ($this->_x == $point->x() && $this->_y == $point->y());
	}
}