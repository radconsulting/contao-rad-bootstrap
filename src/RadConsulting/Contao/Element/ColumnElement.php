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
namespace RadConsulting\Contao\Element;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\DataContainer;
use Contao\FrontendTemplate;

/**
 * Class ColumnElement
 */
class ColumnElement extends ContentElement
{
    /**
     * @return void
     */
    protected function compile()
    {
        // TODO: Implement compile() method.
    }

    /**
     * @return string
     */
    public function generate()
    {
        if ('BE' == TL_MODE) {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new BackendTemplate($this->strTemplate);
            $this->Template->wildcard = 'column';
            return $this->Template->parse();
        }

        $this->strTemplate = 'ce_' . $this->type;
        $this->Template = new FrontendTemplate($this->strTemplate);
        return $this->Template->parse();
    }

    /**
     * @param DataContainer $dc
     * @return void
     */
    public function onSubmit(DataContainer $dc)
    {
    }
}
