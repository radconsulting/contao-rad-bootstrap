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
namespace RadConsulting\Contao\Widget;

use Contao\Widget;

/**
 * Class ColumnWidget
 */
class ColumnWidget extends Widget
{
    /**
     * @var string
     */
    protected $strTemplate = 'be_widget';

    /**
     * @return string
     */
    public function generate()
    {
        $html = '';
        $html .= '<div class="rad columnWidget" data-id="size"><div>';
        $html .= '<div class="rad columnWidget" data-id="offset"><div>';
        $html .= '<div class="rad columnWidget" data-id="push"><div>';
        $html .= '<div class="rad columnWidget" data-id="pull"><div>';
        return $html;
    }
}
