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
class DrawAxisLabel {
	/**
	 * 
	 * @var DrawText
	 */
	private $_drawText = null;
	
	/**
	 * 
	 * @param MetricsPdf $pdf
	 * @param DrawText $drawText
	 * @param int $start
	 * @param int $end
	 */
	public function __construct(DrawText $drawText) {
		$this->_drawText = $drawText;
	}

	public function draw(IAxisElements $axisElements, $label) {
		$position = $axisElements->labelPosition();
		$direction = $axisElements->labelDirection();

		if($direction != 'vertical' && $direction != 'horizontal') {
			return false;
		}

		$text = trim($label);
		if(strlen($text) > 0) {
			$size = 5;
			$this->_drawText->$direction($text, $size, $position, 'center');
		}
	}
}