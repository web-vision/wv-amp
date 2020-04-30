<?php
namespace WebVision\WvAmp\ViewHelpers\Amp;

/*
 * Copyright (c) 2020 web-vision GmbH
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published byd
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

use \TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper as FluidImageViewHelper;

/**
 * @author Riad Zejnilagic Trumic <riad@web-vision.de>
 * @author Yannick Hermes <y.hermes@web-vision.de>
 */
class ImageViewHelper extends FluidImageViewHelper
{   
    /**
     * Initialize arguments.
     *
     * @return void
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        /* layout types are: responsive, fixed, flex-item, container, nodisplay, fill, fixed-height  - example: layout="responsive" */
        $this->registerArgument('layout', 'string', 'Layout Attribute for amp-img so the images scale better');
    }

    /**
     * @var string
     */
    protected $tagName = 'amp-img';
    
    /**
     * Render image with amp-img tag, optional classes and an additional layout attribute that is required, else the amp-validation will fail.
     *
     * @see \TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
     * 
     * @return string Rendered tag
     */
    public function render()
    {
        $classAttribute = $this->arguments['class'];
        if ($this->tag->hasAttribute('class')) {
            $classAttribute .= ' ' . $this->tag->getAttribute('class');
        }
        $this->tag->addAttribute('class', $classAttribute);

        $layoutAttribute = $this->arguments['layout'];
        if ($this->tag->hasAttribute('layout')) {
            $layoutAttribute .= ' ' . $this->tag->getAttribute('layout');
        }
        $this->tag->addAttribute('layout', $layoutAttribute);

        return parent::render();
    }
}