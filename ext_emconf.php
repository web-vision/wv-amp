<?php

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

$EM_CONF[$_EXTKEY] = [
    'title' => 'AMP generator',
    'description' => 'WV AMP generator.',
    'category' => 'misc',
    'version' => '0.1.1',
    'state' => 'alpha',
    'clearcacheonload' => true,
    'author' => 'Yannick Hermes',
    'author_email' => 'y.hermes@web-vision.de',
    'author_company' => 'web-vision GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.1-10.4.99',
        ],
    ],
];
