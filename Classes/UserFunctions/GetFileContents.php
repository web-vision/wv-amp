<?php
namespace WebVision\WvAmp\UserFunctions;

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

use \TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @author Riad Zejnilagic Trumic <riad@web-vision.de>
 * @author Yannick Hermes <y.hermes@web-vision.de>
 */
class GetFileContents
{
    /**
     * @param string $content
     * @param array $conf
     *
     * @return string
     */
    public function process($content, array $conf) // @codingStandardsIgnoreLine
    {
        $content = file_get_contents(GeneralUtility::getFileAbsFileName($conf['file']));

        if (! empty($conf['override.'])) {
            $content = str_replace(
                $conf['override.']['marker'],
                $content,
                $conf['override.']['in']
            );
        }

        return $content;
    }
}
