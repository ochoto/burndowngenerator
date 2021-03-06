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
class Line {
	/**
	 * 
	 * @var Point
	 */
	private $_from = null;

	/**
	 * 
	 * @var Point
	 */
	private $_to = null;

	public function __construct(Point $from, Point $to) {
		$this->_from = $from;
		$this->_to = $to;
	}

	/**
	 * @return Point
	 */
	public function from() {
		return $this->_from;
	}

	/**
	 * @return Point
	 */
	public function to() {
		return $this->_to;
	}
	
	/**
	 * @return float
	 */
	public function size() {
		$x = $this->to()->x() - $this->from()->x();
		$y = $this->to()->y() - $this->from()->y();

		return (sqrt(pow($x, 2) + pow($y, 2)));
	}
}