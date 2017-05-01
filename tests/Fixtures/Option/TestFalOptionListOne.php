<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PhpTools\LibCurl\API\Option\AbstractOption;
use PhpTools\LibCurl\API\Option\OptionInterface;

/**
 * CuRL option implementation for array value.
 */
class TestFalOptionListOne extends AbstractOption implements OptionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'string';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionList()
    {
        return [];
    }
}
