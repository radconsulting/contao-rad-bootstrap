<?php
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  RAD Consulting GmbH 2016
 * @author     RAD Consulting GmbH <info@rad-consulting.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
// Field types
$GLOBALS['BE_FFL']['radColumn'] = 'ColumnWidget';

// Content elements
$GLOBALS['TL_CTE']['rad_bootstrap_grid']['rad_column_start'] = 'RadConsulting\\Contao\\Element\\ElementColumn';
$GLOBALS['TL_CTE']['rad_bootstrap_grid']['rad_column_stop'] = 'RadConsulting\\Contao\\Element\\ElementColumn';

// Wrapper elements
$GLOBALS['TL_WRAPPERS']['start'][] = 'rad_column_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'rad_column_stop';
