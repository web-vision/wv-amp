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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;

/**
 * @author Yannick Hermes <y.hermes@web-vision.de>
 */
class LinkAmp
{
    /**
     * @var string
     */
    protected $linkTag = '<link rel="{REL}" href="{LINK}" />';

    /**
     * @param string $content
     * @param array $conf
     *
     * @return string
     */
    public function process($content, array $conf) // @codingStandardsIgnoreLine
    {
        if (! $this->shouldProcess($conf)) {
            return $content;
        }

        $arguments = [];
        $rel = 'canonical';

        if ($conf['toAmp'] == 1) {
            $arguments['type'] = $conf['typeNum'];
            $rel = 'amphtml';
        }

        $uriBuilder = GeneralUtility::makeInstance(ObjectManager::class)->get(UriBuilder::class);

        $uri = $uriBuilder->reset()
            ->setTargetPageUid($this->cObj->getFieldVal('uid'))
            ->setCreateAbsoluteUri(true)
            ->setArguments($arguments)
            ->build();

        return str_replace(['{REL}', '{LINK}'], [$rel, $uri], $this->linkTag);
    }

    /**
     * @param array $conf
     *
     * @return bool
     */
    protected function shouldProcess(array $conf)
    {
        if (! empty($conf['processForDoktypes'])) {
            return in_array(
                $this->cObj->getFieldVal('doktype'),
                explode(',', $conf['processForDoktypes'])
            );
        }

        return true;
    }
}
