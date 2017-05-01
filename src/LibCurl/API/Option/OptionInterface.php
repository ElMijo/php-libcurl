<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Option;

use InvalidArgumentException;

/**
 * CuRL Options interface
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
interface OptionInterface
{
    /**
     * Let you get option's list
     * @return array
     */
    public function getOptions();

    /**
     * Let you get type of options's value.
     *
     * The valid options are:
     * - bool
     * - int
     * - callable
     * - resource
     * - string
     * - array
     *
     * @return string
     */
    public function getType();
}
