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
class DrawLine {
	/**
	 * 
	 * @var IPdf
	 */
	private $_pdf = null;
	
	/**
	 * 
	 * @var LineStyleChanger
	 */
	private $_styleChanger = null;

	public function __construct(IPdf $pdf, LineStyleChanger $style) {
		$this->_pdf = $pdf;
		$this->_styleChanger = $style;
	}

	public function draw(Line $line, ILineStyle $style = null) {
		if(!is_null($style)) {
			$this->_styleChanger->change($this->_pdf, $style);
		}

		$this->_pdf->line(
			$line->from()->x(),
			$line->from()->y(),
			$line->to()->x(),
			$line->to()->y()
		);
	}
}